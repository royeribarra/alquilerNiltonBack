<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tipos_cliente')->insert([
            'nombre' => 'Cliente normal',
            'descripcion' => 'cliente poco recurrente.',
        ]);
        \DB::table('tipos_cliente')->insert([
            'nombre' => 'Cliente regular',
            'descripcion' => 'Cliente con mucha recurrencia.',
        ]);
        \DB::table('tipos_cliente')->insert([
            'nombre' => 'Cliente vip',
            'descripcion' => 'cliente exclusivo.',
        ]);
    }
}
