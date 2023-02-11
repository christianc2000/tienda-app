<?php

namespace Database\Seeders;

use App\Models\ProductoTematica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoTematicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ptematicas = [
            [
                'producto_id' => 1,
                'tematica_id' => 1,
            ],
            [
                'producto_id' => 2,
                'tematica_id' => 9,
            ],
            [
                'producto_id' => 3,
                'tematica_id' => 10,
            ],
            [
                'producto_id' => 4,
                'tematica_id' => 2,
            ],
            [
                'producto_id' => 5,
                'tematica_id' => 1,
            ],
            [
                'producto_id' => 6,
                'tematica_id' => 4,
            ],
            [
                'producto_id' => 7,
                'tematica_id' => 5,
            ],
            [
                'producto_id' => 8,
                'tematica_id' => 5,
            ],
            [
                'producto_id' => 9,
                'tematica_id' => 7,
            ],
            [
                'producto_id' => 10,
                'tematica_id' => 3,
            ],
        ];
        foreach ($ptematicas as $pt) {
            ProductoTematica::create($pt);
        }
    }
}
