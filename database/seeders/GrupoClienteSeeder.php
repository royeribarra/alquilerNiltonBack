<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GrupoClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('grupos_cliente')->insert([
            'nombre' => 'Mercaderes',
            'descripcion' => 'son personas q laboran en el mercado.',
        ]);
        \DB::table('grupos_cliente')->insert([
            'nombre' => 'Musicos',
            'descripcion' => 'son personas q son musicos.',
        ]);
        \DB::table('grupos_cliente')->insert([
            'nombre' => 'Vendedores',
            'descripcion' => 'son personas que venden.',
        ]);
    }
}
