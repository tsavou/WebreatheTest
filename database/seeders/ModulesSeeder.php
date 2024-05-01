<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modules')->insert([
            [
                'name' => 'Module Eyes',
                'installation_date' => '2024-03-12',
                'details' => 'La plus petite cellule de comptage vision 3D jamais conçue. Ce module permet de valoriser les flux passagers',
                'status' => 1,
                'type_mesure' => 'Nombre de passagers',

            ],

            [
                'name' => 'Capteur de vitesse',
                'installation_date' => '2024-03-12',
                'details' => 'Ce module permet de valoriser la vitesse des transports.',
                'status' => 1,
                'type_mesure' => 'Vitesse'

            ]
        ]);
    }
}
