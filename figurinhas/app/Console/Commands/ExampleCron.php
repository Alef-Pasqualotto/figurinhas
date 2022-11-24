<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Builder\Identity;

class ExampleCron extends Command
{

    protected $signature = 'example:cron';

    protected $description = 'Gerar pacotinhos';

    public function __construct()
    {
        parent::__construct();
    }
    // aqui você coloca a lógica do seu processo
    // pode utilizar todos os recursos do Laravel
    public function handle()
    {
        // DB::table('usuarios')->insert([
        //     'email' => 'emai@email',
        //     'senha' => 'senha123'
        // ]);
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
