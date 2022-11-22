<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{

    public function up()
    {

        $figurinhas = [
            [
                'cidade' => "Bento Gonçalves",
                'data_nasc' => "2004-12-13",
                'foto' => "alef.jpg",                
                'nome' => "Alef Pasqualotto",
                'numero' => 1,
                'raridade' => "comum"
            ],
            [
                'cidade' => "Bento Gonçalves",
                'data_nasc' => "2005-05-07",
                'foto' => "alyssa.jpg",                
                'nome' => "Alyssa Michalski",
                'numero' => 2,
                'raridade' => "comum"
            ],
            [                
                "nome" => "Ana Spadini",
                "foto" => "ana.jpg",
                "data_nasc" => "2004-06-04",
                "cidade" => "Garibaldi",
                "numero" => 3,
                "raridade" => "comum"
            ],
            [                
                "nome" => "Bernardo Marquetti",
                "foto" => "bernardo.jpg",
                "data_nasc" => "2004-06-04",
                "cidade" => "Bento Gonçalves",
                "numero" => 4,
                "raridade" => "comum"
            ],
            [

                "nome" => "Bianca Motta",
                "foto" => "bianca.jpg",
                "data_nasc" => "2004-09-10",
                "cidade" => "Bento Gonçalves",
                "numero" => 5,
                "raridade" => "comum"
            ],
            [             
                "nome" => "Brandon Oliveira",
                "foto" => "brandon.jpg",
                "data_nasc" => "2002-03-14",
                "cidade" => "Bento Gonçalves",
                "numero" => 6,
                "raridade" => "comum"
            ],
            [             
                "nome" => "Cesar Torbes",
                "foto" => "cesar.jpg",
                "data_nasc" => "2005-02-11",
                "cidade" => "Bento Gonçalves",
                "numero" => 7,
                "raridade" => "comum"
            ],
            [              
                "nome" => "Gabriel Minetto",
                "foto" => "gabriel.jpg",
                "data_nasc" => "2005-03-30",
                "cidade" => "Bento Gonçalves",
                "numero" => 8,
                "raridade" => "comum"
            ],
            [             
                "nome" => "Giovanni Zini",
                "foto" => "giovanni.jpg",
                "data_nasc" => "2004-05-08",
                "cidade" => "Bento Gonçalves",
                "numero" => 9,
                "raridade" => "comum"
            ],
            [             
                "nome" => "Gustavo de Carli",
                "foto" => "gustavodecarli.jpg",
                "data_nasc" => "2004-04-27",
                "cidade" => "Bento Gonçalves",
                "numero" => 10,
                "raridade" => "comum"
            ],
            [             
                "nome" => "Gustavo Orth",
                "foto" => "gustavoorth.jpg",
                "data_nasc" => "2004-10-24",
                "cidade" => "Salvador do Sul",
                "numero" => 11,
                "raridade" => "comum"
            ],
            [
                "nome" => "Henrique Santos",
                "foto" => "henrique.jpg",
                "data_nasc" => "2004-02-26",
                "cidade" => "Bento Gonçalves",
                "numero" => 12,
                "raridade" => "comum"
            ],
            [             
                "nome" => "Jeniffer Carvalho",
                "foto" => "jeniffer.jpg",
                "data_nasc" => "2003-04-15",
                "cidade" => "Bento Gonçalves",
                "numero" => 13,
                "raridade" => "comum"
            ],
            [             
                "nome" => "João Ryan",
                "foto" => "joaoryan.jpg",
                "data_nasc" => "2004-02-14",
                "cidade" => "Bento Gonçalves",
                "numero" => 14,
                "raridade" => "comum"
            ],
            [                
                "nome" => "João Victor",
                "foto" => "joaovictor.jpg",
                "data_nasc" => "2005-01-21",
                "cidade" => "Carlos Barbosa",
                "numero" => 15,
                "raridade" => "comum"
            ],
            [             
                "nome" => "João Vitor",
                "foto" => "joaovitor.jpg",
                "data_nasc" => "2005-04-09",
                "cidade" => "Bento Gonçalves",
                "numero" => 16,
                "raridade" => "comum"
            ],
            [             
                "nome" => "Joseph Cipriani",
                "foto" => "joseph.jpg",
                "data_nasc" => "2004-01-01",
                "cidade" => "Bento Gonçalves",
                "numero" => 17,
                "raridade" => "comum"
            ],
            [             
                "nome" => "Juan Córdova",
                "foto" => "juan.jpg",
                "data_nasc" => "2004-09-14",
                "cidade" => "Bento Gonçalves",
                "numero" => 18,
                "raridade" => "comum"
            ],
            [                
                "nome" => "Júlia Conzatti",
                "foto" => "julia.jpg",
                "data_nasc" => "2004-01-01",
                "cidade" => "Garibaldi",
                "numero" => 19,
                "raridade" => "comum"
            ],
            [             
                "nome" => "Maria Eduarda Bortolini",
                "foto" => "maria.jpg",
                "data_nasc" => "2004-12-02",
                "cidade" => "Garibaldi",
                "numero" => 20,
                "raridade" => "comum"
            ],
            [             
                "nome" => "Mateus Haupt",
                "foto" => "mateus.jpg",
                "data_nasc" => "2004-05-02",
                "cidade" => "Salvador do Sul",
                "numero" => 21,
                "raridade" => "comum"
            ],
            [             
                "nome" => "Pedro Henrique Ferrarri",
                "foto" => "pedro.jpg",
                "data_nasc" => "2004-01-01",
                "cidade" => "Bento Gonçalves",
                "numero" => 22,
                "raridade" => "comum"
            ],
            [             
                "nome" => "Ruan Schneider",
                "foto" => "ruan.jpg",
                "data_nasc" => "2004-01-01",
                "cidade" => "Bento Gonçalves",
                "numero" => 23,
                "raridade" => "comum"
            ],
            [             
                "nome" => "Ryan Ramos",
                "foto" => "ryan.jpg",
                "data_nasc" => "2004-01-01",
                "cidade" => "Bento Gonçalves",
                "numero" => 24,
                "raridade" => "comum"
            ],
            [             
                "nome" => "Victor Mazutti",
                "foto" => "victor.jpg",
                "data_nasc" => "2005-03-15",
                "cidade" => "Bento Gonçalves",
                "numero" => 25,
                "raridade" => "comum"
            ]
        ];

        $pacotes = [
            [             
                'usuario_id' => 1,
                'data_compra' => '2022-11-08'
            ],
            [             
                'usuario_id' => 1,
                'data_compra' => '2022-11-08'
            ],
            [             
                'usuario_id' => 1,
                'data_compra' => '2022-11-08'
            ]
        ];

        $figurinhas_pacotes = [
            [             
                'figurinha_id' => 1,
                'pacote_id' => 1,
                'colada' => false
            ],
            [             
                'figurinha_id' => 2,
                'pacote_id' => 1,
                'colada' => false
            ],
            [             
                'figurinha_id' => 3,
                'pacote_id' => 1,
                'colada' => false
            ],
            [             
                'figurinha_id' => 4,
                'pacote_id' => 1,
                'colada' => false
            ],
            [             
                'figurinha_id' => 5,
                'pacote_id' => 2,
                'colada' => false
            ],
            [             
                'figurinha_id' => 6,
                'pacote_id' => 2,
                'colada' => false
            ],
            [             
                'figurinha_id' => 7,
                'pacote_id' => 2,
                'colada' => false
            ],
            [                
                'figurinha_id' => 8,
                'pacote_id' => 2,
                'colada' => false
            ],
            [             
                'figurinha_id' => 9,
                'pacote_id' => 2,
                'colada' => false
            ],
            [                
                'figurinha_id' => 10,
                'pacote_id' => 2,
                'colada' => false
            ],
            [             
                'figurinha_id' => 11,
                'pacote_id' => 3,
                'colada' => false
            ],
            [             
                'figurinha_id' => 12,
                'pacote_id' => 3,
                'colada' => false
            ],
            [                
                'figurinha_id' => 13,
                'pacote_id' => 3,
                'colada' => false
            ],
            [             
                'figurinha_id' => 14,
                'pacote_id' => 3,
                'colada' => false
            ],
            [                
                'figurinha_id' => 15,
                'pacote_id' => 3,
                'colada' => false
            ]
        ];

        DB::table('usuarios')->insert(
            array(                
                'email' => 'megafrancisco@email.com',
                'senha' => 'elevoltou'
            )
        );

        DB::table('figurinhas')->insert($figurinhas);
        DB::table('pacotes')->insert($pacotes);
        DB::table('figurinhas_pacotes')->insert($figurinhas_pacotes);
    }
    public function down()
    {
        DB::table('figurinhas_pacotes')->delete();
        DB::table('pacotes')->delete();
        DB::table('figurinhas')->delete();
        DB::table('usuarios')->delete();
    }
};
