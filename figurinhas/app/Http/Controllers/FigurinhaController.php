<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
 
class FigurinhaController extends Controller
{    
    public function show($id)
    {
        function index(){
            $figurinhas = DB::table('figurinhas')->SelectRaw('nome, foto, data_nasc, naturalidade, raridade')
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
                ->update(array_intersect_key($data,['nome'=>1,'foto'=>1,'data_nasc'=>1,'naturalidade'=>1,'raridade'=>1,]));
     
            return redirect('/cursos');
        }
        
        function show($id){
            $figurinhas = DB::table('figurinhas')
                ->selectRaw("
                    id,
                    nome,
                    foto,
                    data_nasc,
                    naturalidade,
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
}