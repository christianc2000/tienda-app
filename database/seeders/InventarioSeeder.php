<?php

namespace Database\Seeders;

use App\Models\Inventario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inventarios = [
            [
                'lote' => 'LT0001',
                'cantidad' => 20,
                'vencimiento' => null,
                'producto_id' => 1
            ],
            [
                'lote' => 'LT0002',
                'cantidad' => 25,
                'vencimiento' => null,
                'producto_id' => 2
            ],
            [
                'lote' => 'LT0003',
                'cantidad' => 30,
                'vencimiento' => null,
                'producto_id' => 3
            ],
            [
                'lote' => 'LT0004',
                'cantidad' => 10,
                'vencimiento' => null,
                'producto_id' => 4
            ],
            [
                'lote' => 'LT0005',
                'cantidad' => 30,
                'vencimiento' => null,
                'producto_id' => 5
            ],
            [
                'lote' => 'LT0006',
                'cantidad' => 3,
                'vencimiento' => null,
                'producto_id' => 6
            ],
            [
                'lote' => 'LT0007',
                'cantidad' => 0,
                'vencimiento' => null,
                'producto_id' => 7
            ],
            [
                'lote' => 'LT0008',
                'cantidad' => 0,
                'vencimiento' => null,
                'producto_id' => 8
            ],
            [
                'lote' => 'LT0009',
                'cantidad' => 15,
                'vencimiento' => null,
                'producto_id' => 9
            ],
            [
                'lote' => 'LT000A',
                'cantidad' => 15,
                'vencimiento' => null,
                'producto_id' => 10
            ],
        ];
        foreach ($inventarios as $i) {
            Inventario::create($i);
        }
    }
}
