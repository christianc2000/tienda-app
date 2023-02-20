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
                'imagen' => 'https://i.ytimg.com/vi/pxdxZxs9wIs/maxresdefault.jpg',
                'stock' => 20,
                'nivel' => 1,
                'precio_compra' => 9,
                'precio_venta' => 13,
                'tipo_producto_id' => 2
            ],
            [
                'codigo' => 'P00002',
                'nombre' => 'Canasta de paw patron',
                'imagen' => 'https://i.ytimg.com/vi/RXmtWEHygjE/maxresdefault.jpg',
                'stock' => 25,
                'nivel' => 1,
                'precio_compra' => 9,
                'precio_venta' => 13,
                'tipo_producto_id' => 2
            ],
            [
                'codigo' => 'P00003',
                'nombre' => 'Piñata de campanita',
                'imagen' => 'https://i.pinimg.com/736x/3a/f0/c2/3af0c2c7caa07c6866d3ad4878269f74.jpg',
                'stock' => 30,
                'nivel' => 1,
                'precio_compra' => 12,
                'precio_venta' => 15,
                'tipo_producto_id' => 3
            ],
            [
                'codigo' => 'P00004',
                'nombre' => 'Sombrero de sonic',
                'imagen' => 'https://i.pinimg.com/originals/5e/a2/68/5ea268ea7a71512b4f7c463972bc3ee8.jpg',
                'stock' => 10,
                'nivel' => 1,
                'precio_compra' => 7,
                'precio_venta' => 10,
                'tipo_producto_id' => 4
            ],
            [
                'codigo' => 'P00005',
                'nombre' => 'Sombrero de frozen',
                'imagen' => 'https://i.pinimg.com/originals/2c/34/e4/2c34e446c9adec6bb7dd634a23f3865d.jpg',
                'stock' => 30,
                'nivel' => 1,
                'precio_compra' => 7,
                'precio_venta' => 10,
                'tipo_producto_id' => 4
            ],
            [
                'codigo' => 'P00006',
                'nombre' => 'Canasta Dragon ball Z',
                'imagen' => 'https://i.pinimg.com/474x/d5/c0/2d/d5c02db9ee8b31516f8e2029206d5d65.jpg',
                'stock' => 3,
                'nivel' => 1,
                'precio_compra' => 9,
                'precio_venta' => 13,
                'tipo_producto_id' => 2
            ],
            [
                'codigo' => 'P00007',
                'nombre' => 'Piñata de los vengadores',
                'imagen' => 'https://i.pinimg.com/originals/2f/77/d2/2f77d2a89695058d5bed13130f63a268.jpg',
                'stock' => 0,
                'nivel' => 1,
                'precio_compra' => 12,
                'precio_venta' => 15,
                'tipo_producto_id' => 3
            ],
            [
                'codigo' => 'P00008',
                'nombre' => 'Canasta de los vengadores',
                'imagen' => 'https://i.pinimg.com/originals/d3/b1/47/d3b14785ed578e181ce3e6ed996e5bb3.jpg',
                'stock' => 0,
                'nivel' => 1,
                'precio_compra' => 9,
                'precio_venta' => 13,
                'tipo_producto_id' => 2
            ],
            [
                'codigo' => 'P00009',
                'nombre' => 'Canasta de mario bross',
                'imagen' => 'https://i.pinimg.com/originals/46/f3/87/46f38720cae7e548fda41a850dc4b70d.jpg',
                'stock' => 15,
                'nivel' => 1,
                'precio_compra' => 9,
                'precio_venta' => 13,
                'tipo_producto_id' => 2
            ],
            [
                'codigo' => 'P0000A',
                'nombre' => 'Piñata de vaca lola',
                'imagen' => 'https://i.pinimg.com/originals/93/07/53/930753e1e2c8fe71c3bebae813a3a5c0.jpg',
                'stock' => 15,
                'nivel' => 1,
                'precio_compra' => 12,
                'precio_venta' => 15,
                'tipo_producto_id' => 3
            ],
            //********************************************************** */
            [
                'codigo' => 'P0000B',
                'nombre' => 'Canasta de vaca lola',
                'imagen' => 'https://i.pinimg.com/originals/b0/24/6c/b0246c101bfcbcc5802be602510e14f4.jpg',
                'stock' => 10,
                'nivel' => 1,
                'precio_compra' => 9,
                'precio_venta' => 13,
                'tipo_producto_id' => 2
            ],
            [
                'codigo' => 'P0000C',
                'nombre' => 'Sombrero de Lady Bug',
                'imagen' => 'https://cdn.shopify.com/s/files/1/0310/4787/6746/products/SombreroLoco_Ladybug.jpg',
                'stock' => 15,
                'nivel' => 1,
                'precio_compra' => 7,
                'precio_venta' => 10,
                'tipo_producto_id' => 4
            ],
     /********************************************************** */
            [
                'codigo' => 'C0000A',
                'nombre' => 'Caja canasta de frozen',
                'imagen' => 'https://www.noroeste.com.mx/binrepository/600x400/0c0/0d0/none/12707/YATB/Canasta_materiales-126596_NO1075031_MG8864900.jpg',
                'stock' => 1,
                'nivel' => 2,
                'precio_compra' => 9,
                'precio_venta' => 13,
                'tipo_producto_id' => 1
            ],
        ];
        foreach ($productos as $p) {
            Producto::create($p);
        }

    }
}
