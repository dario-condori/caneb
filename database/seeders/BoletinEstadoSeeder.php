<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoletinEstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('boletin_estado')->insert([
            'descripcion' => 'Registrado',
        ]);
        DB::table('boletin_estado')->insert([
            'descripcion' => 'Revisado',
        ]);
        DB::table('boletin_estado')->insert([
            'descripcion' => 'Aprobado',
        ]);
        DB::table('boletin_estado')->insert([
            'descripcion' => 'Baja',
        ]);
    }
}
