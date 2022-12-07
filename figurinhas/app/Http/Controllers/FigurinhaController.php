<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB; 

class FigurinhaController extends Controller
{    

        function index(){
            $figurinhas = DB::table('figurinhas')
            ->SelectRaw('id, nome, foto, DATE_FORMAT(data_nasc, "%d/%m/%Y") as data_nasc, cidade, numero, raridade')
            ->orderBy('nome')
            ->get();
            /* echo '<pre>';
            var_dump($figurinhas); */
            return view('figurinhas.index', ['figurinhas' => $figurinhas, 'title' => 'Figurinhas']);
        }

        function edit($id){

            $figurinhas = DB::table('figurinhas')->where('id', $id)->first();
     
            return view('figurinhas.edit', ['title' => 'Editar figurinhas', 'figurinhas' => $figurinhas]);
        }
        function update(Request $request){
            $data = $request->all();
            unset($data['_token']);
            
            $id = array_shift($data);    
            DB::table('figurinhas')
                ->where('id',$id)
                ->update(array_intersect_key($data,['nome'=>1,'data_nasc'=>1,'cidade'=>1,'raridade'=>1,]));
     
            return redirect('/figurinhas');
        }
        
        function show($id){
            $figurinha = DB::table('figurinhas')
                ->selectRaw("
                    id,
                    nome,
                    foto,
                    data_nasc,
                    cidade,
                    numero,
                    raridade
                    ")
                ->Where('id',$id)
                ->first();
    
            return view('figurinhas.show', ['figurinhas' => $figurinha, 'title' => 'Figurinhas']);
        }
 
        function destroy($id){
 
            DB::table('figurinhas')
                ->where('id', $id)
                ->delete();
            return redirect('/figurinhas');
        }

        function retornaJson(){
            $figurinhas = DB::table('figurinhas')
            ->SelectRaw('id, nome, foto, cidade, numero, raridade')
            ->orderBy('nome')
            ->get();
            echo json_encode($figurinhas);
        }

        function retornaJsonUsuario($id){
            $figurinhas = DB::table('figurinhas_pacotes')
            ->join('pacotes', 'pacotes.id', '=', 'figurinhas_pacotes.pacote_id')    
            ->join('figurinhas', 'figurinhas.id', '=', 'figurinhas_pacotes.figurinha_id')
            ->selectRaw('figurinhas_pacotes.colada, figurinhas.*, figurinhas_pacotes.id AS id_unico')
            ->where('usuario_id', $id)            
            ->orderBy('nome')
            ->get();
            echo json_encode($figurinhas);
        }
    
}