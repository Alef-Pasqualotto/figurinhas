<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\Models\User;
 
class PacoteController extends Controller
{    
    function criarPacote(Request $request){
        
        //unset($data['_token']);
        
        //$id = array_shift($data);
        $id = 1;
        DB::table('pacotes')->insert([
            'usuario_id' => $id,
            'data_compra' => NOW()
        ]);

        $figurinhas_aleatorias = DB::table('figurinhas')->select('id')->orderBy('rand()');


        
        return redirect('/cursos');
    }

    function insereFigurinhaPacote($pacote_id, $figurinha_id){
        DB::table('figuirinhas_pacotes')->insert([
            'figurinha_id' => $figurinha_id,
            'pacote_id' => $pacote_id,
            'colada' => 0
        ]);
    }
}