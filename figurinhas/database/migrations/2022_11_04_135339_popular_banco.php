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
                'id' => 1,
                'nome' => "Alef Pasqualotto",
                'numero' => 1,
                'raridade' => "comum"
            ],
            [
                'cidade' => "Bento Gonçalves",
                'data_nasc' => "2005-05-07",
                'foto' => "alyssa.jpg",
                'id' => 2,
                'nome' => "Alyssa Michalski",
                'numero' => 2,
                'raridade' => "comum"
            ],
            [
                "id" => 3,
                "nome" => "Ana Spadini",
                "foto" => "ana.jpg",
                "data_nasc" => "2004-06-04",
                "cidade" => "Garibaldi",
                "numero" => 3,
                "raridade" => "comum"
            ],
            [
                "id" => 4,
                "nome" => "Bernardo Marquetti",
                "foto" => "bernardo.jpg",
                "data_nasc" => "2004-06-04",
                "cidade" => "Bento Gonçalves",
                "numero" => 4,
                "raridade" => "comum"
            ],
            [
                "id" => 5,
                "nome" => "Bianca Motta",
                "foto" => "bianca.jpg",
                "data_nasc" => "2004-09-10",
                "cidade" => "Bento Gonçalves",
                "numero" => 5,
                "raridade" => "comum"
            ],
            [
                "id" => 6,
                "nome" => "Brandon Oliveira",
                "foto" => "brandon.jpg",
                "data_nasc" => "2004-01-01",
                "cidade" => "Bento Gonçalves",
                "numero" => 6,
                "raridade" => "comum"
            ],
            [
                "id" => 7,
                "nome" => "Cesar Torbes",
                "foto" => "cesar.jpg",
                "data_nasc" => "2005-02-11",
                "cidade" => "Bento Gonçalves",
                "numero" => 7,
                "raridade" => "comum"
            ],
            [
                "id" => 8,
                "nome" => "Gabriel Minetto",
                "foto" => "gabriel.jpg",
                "data_nasc" => "2005-03-30",
                "cidade" => "Bento Gonçalves",
                "numero" => 8,
                "raridade" => "comum"
            ],
            [
                "id" => 9,
                "nome" => "Giovanni Zini",
                "foto" => "giovanni.jpg",
                "data_nasc" => "2004-01-01",
                "cidade" => "Bento Gonçalves",
                "numero" => 9,
                "raridade" => "comum"
            ],
            [
                "id" => 10,
                "nome" => "Gustavo de Carli",
                "foto" => "gustavodecarli.jpg",
                "data_nasc" => "2004-04-27",
                "cidade" => "Bento Gonçalves",
                "numero" => 10,
                "raridade" => "comum"
            ],
            [
                "id" => 11,
                "nome" => "Gustavo Orth",
                "foto" => "gustavoorth.jpg",
                "data_nasc" => "2004-10-24",
                "cidade" => "Salvador do Sul",
                "numero" => 11,
                "raridade" => "comum"
            ],
            [
                "id" => 12,
                "nome" => "Henrique Santos",
                "foto" => "henrique.jpg",
                "data_nasc" => "2004-02-26",
                "cidade" => "Bento Gonçalves",
                "numero" => 12,
                "raridade" => "comum"
            ],
            [
                "id" => 13,
                "nome" => "Jeniffer Carvalho",
                "foto" => "jeniffer.jpg",
                "data_nasc" => "2004-01-01",
                "cidade" => "Bento Gonçalves",
                "numero" => 13,
                "raridade" => "comum"
            ],
            [
                "id" => 14,
                "nome" => "João Ryan",
                "foto" => "joaoryan.jpg",
                "data_nasc" => "2004-02-14",
                "cidade" => "Bento Gonçalves",
                "numero" => 14,
                "raridade" => "comum"
            ],
            [
                "id" => 15,
                "nome" => "João Victor",
                "foto" => "joaovictor.jpg",
                "data_nasc" => "2005-01-21",
                "cidade" => "Carlos Barbosa",
                "numero" => 15,
                "raridade" => "comum"
            ],
            [
                "id" => 16,
                "nome" => "João Vitor",
                "foto" => "joaovitor.jpg",
                "data_nasc" => "2005-04-09",
                "cidade" => "Bento Gonçalves",
                "numero" => 16,
                "raridade" => "comum"
            ],
            [
                "id" => 17,
                "nome" => "Joseph Cipriani",
                "foto" => "joseph.jpg",
                "data_nasc" => "2004-01-01",
                "cidade" => "Bento Gonçalves",
                "numero" => 17,
                "raridade" => "comum"
            ],
            [
                "id" => 18,
                "nome" => "Juan Córdova",
                "foto" => "juan.jpg",
                "data_nasc" => "2004-09-14",
                "cidade" => "Carlos Barbosa",
                "numero" => 18,
                "raridade" => "comum"
            ],
            [
                "id" => 19,
                "nome" => "Júlia Conzatti",
                "foto" => "julia.jpg",
                "data_nasc" => "2004-01-01",
                "cidade" => "Garibaldi",
                "numero" => 19,
                "raridade" => "comum"
            ],
            [
                "id" => 20,
                "nome" => "Maria Eduarda Bortolini",
                "foto" => "maria.jpg",
                "data_nasc" => "2004-12-02",
                "cidade" => "Garibaldi",
                "numero" => 20,
                "raridade" => "comum"
            ],
            [
                "id" => 21,
                "nome" => "Mateus Haupt",
                "foto" => "mateus.jpg",
                "data_nasc" => "2004-05-02",
                "cidade" => "Salvador do Sul",
                "numero" => 21,
                "raridade" => "comum"
            ],
            [
                "id" => 22,
                "nome" => "Pedro Henrique Ferrarri",
                "foto" => "pedro.jpg",
                "data_nasc" => "2004-01-01",
                "cidade" => "Bento Gonçalves",
                "numero" => 22,
                "raridade" => "comum"
            ],
            [
                "id" => 23,
                "nome" => "Ruan Schneider",
                "foto" => "ruan.jpg",
                "data_nasc" => "2004-01-01",
                "cidade" => "Bento Gonçalves",
                "numero" => 23,
                "raridade" => "comum"
            ],
            [
                "id" => 24,
                "nome" => "Ryan Ramos",
                "foto" => "ryan.jpg",
                "data_nasc" => "2004-01-01",
                "cidade" => "Bento Gonçalves",
                "numero" => 24,
                "raridade" => "comum"
            ],
            [
                "id" => 25,
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
                'id' => 1,
                'usuario_id' => 1,
                'data_compra' => '2022-11-08'
            ],
            [
                'id' => 2,
                'usuario_id' => 1,
                'data_compra' => '2022-11-08'
            ],
            [
                'id' => 3,
                'usuario_id' => 1,
                'data_compra' => '2022-11-08'
            ]
        ];

        $figurinhas_pacotes = [
            [
                'id' => 1,
                'figurinha_id' => 1,
                'pacote_id' => 1,
                'colada' => false
            ],
            [
                'id' => 2,
                'figurinha_id' => 2,
                'pacote_id' => 1,
                'colada' => false
            ],
            [
                'id' => 3,
                'figurinha_id' => 3,
                'pacote_id' => 1,
                'colada' => false
            ],
            [
                'id' => 4,
                'figurinha_id' => 4,
                'pacote_id' => 1,
                'colada' => false
            ],
            [
                'id' => 5,
                'figurinha_id' => 5,
                'pacote_id' => 2,
                'colada' => false
            ],
            [
                'id' => 6,
                'figurinha_id' => 6,
                'pacote_id' => 2,
                'colada' => false
            ],
            [
                'id' => 7,
                'figurinha_id' => 7,
                'pacote_id' => 2,
                'colada' => false
            ],
            [
                'id' => 8,
                'figurinha_id' => 8,
                'pacote_id' => 2,
                'colada' => false
            ],
            [
                'id' => 9,
                'figurinha_id' => 9,
                'pacote_id' => 2,
                'colada' => false
            ],
            [
                'id' => 10,
                'figurinha_id' => 10,
                'pacote_id' => 2,
                'colada' => false
            ],
            [
                'id' => 11,
                'figurinha_id' => 11,
                'pacote_id' => 3,
                'colada' => false
            ],
            [
                'id' => 12,
                'figurinha_id' => 12,
                'pacote_id' => 3,
                'colada' => false
            ],
            [
                'id' => 13,
                'figurinha_id' => 13,
                'pacote_id' => 3,
                'colada' => false
            ],
            [
                'id' => 14,
                'figurinha_id' => 14,
                'pacote_id' => 3,
                'colada' => false
            ],
            [
                'id' => 15,
                'figurinha_id' => 15,
                'pacote_id' => 3,
                'colada' => false
            ]
        ];

        DB::table('usuarios')->insert(
            array(
                'id' => 1,
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
