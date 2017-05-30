<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this ->call(ClientesTableSeeder::class);
        // $this ->call(VeiculosTableSeeder::clas);
        //$this ->call(MercadoriasTableSeeder::clas);
        $this->call(tiposdeusuariosTableSeeder::class);
        $this->call(usuariosTableSeeder::class);
    }
}
