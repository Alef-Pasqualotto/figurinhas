<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class PacoteController extends Controller
{
    function criarPacote(Request $request)
    {

        //$data = $request->all();
        // unset($data['_token']);

        //$id = $data['id'];
        $id = 1;
        DB::table('pacotes')->insert([
            'usuario_id' => $id,
            'data_compra' => NOW()
        ]);

        $figurinhas_aleatorias = DB::select('SELECT id FROM figurinhas ORDER BY RAND() LIMIT 5');
        foreach ($figurinhas_aleatorias as $figurinha) {
            DB::table('figurinhas_pacotes')->insert([
                'figurinha_id' => $figurinha->id,
                'pacote_id' => strval($id),
                'colada' => 0
            ]);
        }

        
            
        
    }
}
