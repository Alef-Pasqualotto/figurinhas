<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\Models\User;
 
class PacoteController extends Controller
{    
    function criarPacote(Request $request){
        
        unset($data['_token']);
        
        $id = array_shift($data);    
        DB::table('pacotes')->insert([
            'usuario_id' => $id,
            'data_compra' => NOW()
        ]);

        return redirect('/cursos');
    }
}