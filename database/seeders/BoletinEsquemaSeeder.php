<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoletinEsquemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('boletin_esquema')->insert([
            'descripcion' => 'Una sola capa',
            'nota' => 'Ninguna',
        ]);
        DB::table('boletin_esquema')->insert([
            'descripcion' => 'N capas, menu LATERAL',
            'nota' => 'Las opciones de navegacion debe ser descriptivo y en el lado izquierdo del boletin',
        ]);
        DB::table('boletin_esquema')->insert([
            'descripcion' => 'N capas, menu CENTRAL',
            'nota' => 'Las opciones de navegacion debe ser descriptivo y en el centro del boletin',
        ]);
    }
}
