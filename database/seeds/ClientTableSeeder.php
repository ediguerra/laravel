<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        \ProjetoTarefas\Client::truncate();
        factory(\ProjetoTarefas\Client::class, 10)->create();
    }
}
