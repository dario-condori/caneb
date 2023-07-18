<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departamentos')->insert([
            'descripcion' => 'Chuquisaca',
            'sigla' => 'CH',
        ]);
        DB::table('departamentos')->insert([
            'descripcion' => 'La Paz',
            'sigla' => 'LP',
        ]);
        DB::table('departamentos')->insert([
            'descripcion' => 'Cochabamba',
            'sigla' => 'CB',
        ]);
        DB::table('departamentos')->insert([
            'descripcion' => 'Oruro',
            'sigla' => 'OR',
        ]);
        DB::table('departamentos')->insert([
            'descripcion' => 'Potosí',
            'sigla' => 'PT',
        ]);
        DB::table('departamentos')->insert([
            'descripcion' => 'Tarija',
            'sigla' => 'TJ',
        ]);
        DB::table('departamentos')->insert([
            'descripcion' => 'Santa Cruz',
            'sigla' => 'SC',
        ]);
        DB::table('departamentos')->insert([
            'descripcion' => 'Beni',
            'sigla' => 'BN',
        ]);
        DB::table('departamentos')->insert([
            'descripcion' => 'Pando',
            'sigla' => 'PN',
        ]);
    }
}
