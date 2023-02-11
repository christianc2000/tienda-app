<?php

namespace Database\Seeders;

use App\Models\Tematica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TematicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tematicas = [
            [
                'nombre' => 'Frozen'
            ],
            [
                'nombre' => 'Sonic'
            ],
            [
                'nombre' => 'Vaca Lola'
            ],
            [
                'nombre' => 'Dragon ball Z'
            ],
            [
                'nombre' => 'Vengadores'
            ],
            [
                'nombre' => 'Hulk'
            ],
            [
                'nombre' => 'Mario Bross'
            ],

            [
                'nombre' => 'Granja de Zenon'
            ],
            [
                'nombre' => 'Paw Patron'
            ],
            [
                'nombre' => 'Campanita'
            ]
        ];
        foreach ($tematicas as $t) {
            Tematica::create($t);
        }
    }
}
