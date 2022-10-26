<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB; 

class FigurinhaController extends Controller
{    

        function index(){
            $figurinhas = DB::table('figurinhas')->SelectRaw('nome, foto, data_nasc, cidade, raridade')
            ->orderBy('nome')
            ->get();
            return view('figurinhas.index', ['figurinhas' => $figurinhas, 'title' => 'Figurinhas']);
        }

        function edit($id){

            $figurinhas = DB::table('figurinhas')->where('id', $id)->first();
     
            return view('figurinhas.edit', ['figurinhas' => $figurinhas, 'title' => 'Editar figurinhas']);
        }
        function update(Request $request){
            $data = $request->all();
            unset($data['_token']);
            
            $id = array_shift($data);    
            DB::table('figurinhas')
                ->where('id',$id)
                ->update(array_intersect_key($data,['nome'=>1,'foto'=>1,'data_nasc'=>1,'cidade'=>1,'raridade'=>1,]));
     
            return redirect('/cursos');
        }
        
        function show($id){
            $figurinhas = DB::table('figurinhas')
                ->selectRaw("
                    id,
                    nome,
                    foto,
                    data_nasc,
                    cidade,
                    raridade
                    ")
                ->Where('id',$id)
                ->first();
    
            return view('figurinhas.show', ['figurinhas' => $figurinhas, 'title' => 'Figurinhas']);
        }
 
        function destroy($id){
 
            DB::table('figurinhas')
                ->where('id', $id)
                ->delete();
            return redirect('/figurinhas');
        }
    
}