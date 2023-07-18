<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElementoBoletinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('elemento_boletin')->insert([
            'descripcion' => 'Gráfico',
        ]);
        DB::table('elemento_boletin')->insert([
            'descripcion' => 'Texto',
        ]);
        DB::table('elemento_boletin')->insert([
            'descripcion' => 'Tabla',
        ]);
        DB::table('elemento_boletin')->insert([
            'descripcion' => 'Imagen',
        ]);
    }
}
