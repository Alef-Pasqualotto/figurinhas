<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class PacoteController extends Controller
{
    function criarPacote($id)
    {
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
        return redirect('/figurinhas');
    }
    function testeCron()
    {
        $usuarios = DB::select('SELECT id FROM usuarios');
        foreach ($usuarios as $usuario) {
            $figurinhas_aleatorizadas = DB::select('SELECT id FROM figurinhas ORDER BY RAND() LIMIT 5');
            $id_pacote_inserido = DB::table('pacotes')->insertGetId(['usuario_id' => $usuario->id, 'data_compra' => now()]);
            foreach ($figurinhas_aleatorizadas as $figurinha) {
                DB::table('figurinhas_pacotes')->insert([
                    'pacote_id' => $id_pacote_inserido,
                    'figurinha_id' => $figurinha->id,
                    'colada' => 0
                ]);
            }
        }
    }
}
