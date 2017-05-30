<?php

use Illuminate\Database\Seeder;

class tiposdeusuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_de_usuarios')->insert([
            'tipo' => 'administrator',
            'descricao' => 'Usuário Mestre Jedi',
        ]);
    }
}
