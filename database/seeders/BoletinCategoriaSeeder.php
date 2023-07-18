<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoletinCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('boletin_categoria')->insert([
            'descripcion' => 'Departamental',
            'sigla' => 'Depto',
        ]);
        DB::table('boletin_categoria')->insert([
            'descripcion' => 'Regional',
            'sigla' => 'Regio',
        ]);
        DB::table('boletin_categoria')->insert([
            'descripcion' => 'Nacional',
            'sigla' => 'Nal',
        ]);
        DB::table('boletin_categoria')->insert([
            'descripcion' => 'Internacional',
            'sigla' => 'Inter',
        ]);
    }
}
