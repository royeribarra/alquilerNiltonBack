<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tipos_documento')->insert([
            'nombre' => 'DNI',
            'descripcion' => 'documento de identidad.',
        ]);
        \DB::table('tipos_documento')->insert([
            'nombre' => 'RUC',
            'descripcion' => 'Registro unico contribuyente.',
        ]);
        \DB::table('tipos_documento')->insert([
            'nombre' => 'Pasaporte',
            'descripcion' => 'es el pasaporte de viaje.',
        ]);
    }
}
