<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = [
            [
                'codigo' => 'P00001',
                'nombre' => 'Canasta de frozen',
                'stock' => 20,
                'nivel' => 1,
                'precio_compra'=>9,
                'precio_venta'=>13,
                'tipo_producto_id' => 2
            ],
            [
                'codigo' => 'P00002',
                'nombre' => 'Canasta de paw patron',
                'stock' => 25,
                'nivel' => 1,
                'precio_compra'=>9,
                'precio_venta'=>13,
                'tipo_producto_id' => 2
            ],
            [
                'codigo' => 'P00003',
                'nombre' => 'Piñata de campanita',
                'stock' => 30,
                'nivel' => 1,
                'precio_compra'=>12,
                'precio_venta'=>15,
                'tipo_producto_id' => 3
            ],
            [
                'codigo' => 'P00004',
                'nombre' => 'Sombrero de sonic',
                'stock' => 10,
                'nivel' => 1,
                'precio_compra'=>7,
                'precio_venta'=>10,
                'tipo_producto_id' => 4
            ],
            [
                'codigo' => 'P00005',
                'nombre' => 'Sombrero de frozen',
                'stock' => 30,
                'nivel' => 1,
                'precio_compra'=>7,
                'precio_venta'=>10,
                'tipo_producto_id' => 4
            ],
            [
                'codigo' => 'P00006',
                'nombre' => 'Canasta Dragon ball Z',
                'stock' => 3,
                'nivel' => 1,
                'precio_compra'=>9,
                'precio_venta'=>13,
                'tipo_producto_id' => 2
            ],
            [
                'codigo' => 'P00007',
                'nombre' => 'Piñata de los vengadores',
                'stock' => 0,
                'nivel' => 1,
                'precio_compra'=>12,
                'precio_venta'=>15,
                'tipo_producto_id' => 3
            ],
            [
                'codigo' => 'P00008',
                'nombre' => 'Canasta de los vengadores',
                'stock' => 0,
                'nivel' => 1,
                'precio_compra'=>9,
                'precio_venta'=>13,
                'tipo_producto_id' => 2
            ],
            [
                'codigo' => 'P00009',
                'nombre' => 'Canasta de mario bross',
                'stock' => 15,
                'nivel' => 1,
                'precio_compra'=>9,
                'precio_venta'=>13,
                'tipo_producto_id' => 2
            ],
            [
                'codigo' => 'P0000A',
                'nombre' => 'Piñata de vaca lola',
                'stock' => 15,
                'nivel' => 1,
                'precio_compra'=>12,
                'precio_venta'=>15,
                'tipo_producto_id' => 3
            ],
            [
                'codigo' => 'C0000A',
                'nombre' => 'Caja canasta de frozen',
                'stock' => 1,
                'nivel' => 2,
                'precio_compra'=>9,
                'precio_venta'=>13,
                'tipo_producto_id' => 1
            ],
        ];
        foreach ($productos as $p) {
            Producto::create($p);
        }
    }
}
