<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('profesiones')->insert([
            'nombre' => 'Ninguno',
            'descripcion' => 'Ninguna profesion',
        ]);
        \DB::table('profesiones')->insert([
            'nombre' => 'Ingenieros',
            'descripcion' => 'Laboran en ingenieroa.',
        ]);
        \DB::table('profesiones')->insert([
            'nombre' => 'Psicologos',
            'descripcion' => 'Laboran en psicologia.',
        ]);
        \DB::table('profesiones')->insert([
            'nombre' => 'Administradores',
            'descripcion' => 'Laboran en adminsitracion.',
        ]);
    }
}
