<?php

use Illuminate\Database\Seeder;

class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contatos')->insert([
          'saudacao' => 'Sr.',
          'nome' => 'Gustavo de Souza',
          'telefone' => '(35) 99999-9999',
          'data_nascimento' => '2018/10/23',
          'email' => 'gustavodesouza01@live.com',
          'nota' => 'Usuário criado usando seeder com método DB',
          'created_at' => date('Y-m-d H:i:s')
        ]);

        factory (App\Contato::class, 20)->create();
    }
}
