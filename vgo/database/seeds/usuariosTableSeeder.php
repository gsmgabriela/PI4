<?php

use Illuminate\Database\Seeder;

class usuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nome' => 'Steve Jobs',
            'cpf' => '15984430988',
            'usuario' => 'Jobs',
            'senha' => 'apple',
            'tipo_usuario_id' => 1,
        ]);
    }
}
