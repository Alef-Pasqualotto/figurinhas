<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;


use Illuminate\Support\Facades\DB;

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
        //DB::insert('insert into usuarios (email, senha) values ( ?, ?)', ['email@email.com', '123']);
    }
}
