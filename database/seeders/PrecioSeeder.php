<?php

namespace Database\Seeders;

use App\Models\Precio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrecioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $precios = [
            [
                'precio' => 13,
                'fecha_finalizado' => null,
                'tipo' => 'V',
                'producto_id' => 1
            ],
            [
                'precio' => 12,
                'fecha_finalizado' => '2023-02-08',
                'tipo' => 'V',
                'producto_id' => 2
            ],
            [
                'precio' => 13,
                'fecha_finalizado' => null,
                'tipo' => 'V',
                'producto_id' => 2
            ],
            [
                'precio' => 15,
                'fecha_finalizado' => null,
                'tipo' => 'V',
                'producto_id' => 3
            ],
            [
                'precio' => 10,
                'fecha_finalizado' => null,
                'tipo' => 'V',
                'producto_id' => 4
            ],
            [
                'precio' => 10,
                'fecha_finalizado' => null,
                'tipo' => 'V',
                'producto_id' => 5
            ],
            [
                'precio' => 13,
                'fecha_finalizado' => null,
                'tipo' => 'V',
                'producto_id' => 6
            ],
            [
                'precio' => 15,
                'fecha_finalizado' => null,
                'tipo' => 'V',
                'producto_id' => 7
            ],
            [
                'precio' => 13,
                'fecha_finalizado' => null,
                'tipo' => 'V',
                'producto_id' => 8
            ],
            [
                'precio' => 13,
                'fecha_finalizado' => null,
                'tipo' => 'V',
                'producto_id' => 9
            ],
            [
                'precio' => 15,
                'fecha_finalizado' => null,
                'tipo' => 'V',
                'producto_id' => 10
            ],
            [
                'precio' => 13,
                'fecha_finalizado' => null,
                'tipo' => 'V',
                'producto_id' => 11
            ],
            [
                'precio' => 10,
                'fecha_finalizado' => null,
                'tipo' => 'V',
                'producto_id' => 12
            ],
            //PRECIO COMPRAS
            [
                'precio' => 9,
                'fecha_finalizado' => null,
                'tipo' => 'C',
                'producto_id' => 1
            ],
            [
                'precio' => 9,
                'fecha_finalizado' => null,
                'tipo' => 'C',
                'producto_id' => 2
            ],
            [
                'precio' => 12,
                'fecha_finalizado' => null,
                'tipo' => 'C',
                'producto_id' => 3
            ],
            [
                'precio' => 7,
                'fecha_finalizado' => null,
                'tipo' => 'C',
                'producto_id' => 4
            ],
            [
                'precio' => 7,
                'fecha_finalizado' => null,
                'tipo' => 'C',
                'producto_id' => 5
            ],
            [
                'precio' => 9,
                'fecha_finalizado' => null,
                'tipo' => 'C',
                'producto_id' => 6
            ],
            [
                'precio' => 12,
                'fecha_finalizado' => null,
                'tipo' => 'C',
                'producto_id' => 7
            ],
            [
                'precio' => 9,
                'fecha_finalizado' => null,
                'tipo' => 'C',
                'producto_id' => 8
            ],
            [
                'precio' => 9,
                'fecha_finalizado' => null,
                'tipo' => 'C',
                'producto_id' => 9
            ],
            [
                'precio' => 12,
                'fecha_finalizado' => null,
                'tipo' => 'C',
                'producto_id' => 10
            ],
            [
                'precio' => 9,
                'fecha_finalizado' => null,
                'tipo' => 'C',
                'producto_id' => 11
            ],
            [
                'precio' => 7,
                'fecha_finalizado' => null,
                'tipo' => 'C',
                'producto_id' => 12
            ],
        ];
        foreach ($precios as $p) {
            Precio::create($p);
        }
    }
}
