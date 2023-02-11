<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imagenes = [
            [
                'url' => 'https://i.ytimg.com/vi/pxdxZxs9wIs/maxresdefault.jpg',
                'imageable_id' => 1,
                'imageable_type' => 'App\Models\Producto'
            ],
            [
                'url' => 'https://i.ytimg.com/vi/RXmtWEHygjE/maxresdefault.jpg',
                'imageable_id' => 2,
                'imageable_type' => 'App\Models\Producto'
            ],
            [
                'url' => 'https://i.pinimg.com/736x/3a/f0/c2/3af0c2c7caa07c6866d3ad4878269f74.jpg',
                'imageable_id' => 3,
                'imageable_type' => 'App\Models\Producto'
            ],
            [
                'url' => 'https://i.pinimg.com/originals/5e/a2/68/5ea268ea7a71512b4f7c463972bc3ee8.jpg',
                'imageable_id' => 4,
                'imageable_type' => 'App\Models\Producto'
            ],
            [
                'url' => 'https://i.pinimg.com/originals/2c/34/e4/2c34e446c9adec6bb7dd634a23f3865d.jpg',
                'imageable_id' => 5,
                'imageable_type' => 'App\Models\Producto'
            ],
            [
                'url' => 'https://i.pinimg.com/474x/d5/c0/2d/d5c02db9ee8b31516f8e2029206d5d65.jpg',
                'imageable_id' => 6,
                'imageable_type' => 'App\Models\Producto'
            ],
            [
                'url' => 'https://i.pinimg.com/originals/2f/77/d2/2f77d2a89695058d5bed13130f63a268.jpg',
                'imageable_id' => 7,
                'imageable_type' => 'App\Models\Producto'
            ],
            [
                'url' => 'https://i.pinimg.com/originals/d3/b1/47/d3b14785ed578e181ce3e6ed996e5bb3.jpg',
                'imageable_id' => 8,
                'imageable_type' => 'App\Models\Producto'
            ],
            [
                'url' => 'https://i.pinimg.com/originals/46/f3/87/46f38720cae7e548fda41a850dc4b70d.jpg',
                'imageable_id' => 9,
                'imageable_type' => 'App\Models\Producto'
            ],
            [
                'url' => 'https://i.pinimg.com/originals/93/07/53/930753e1e2c8fe71c3bebae813a3a5c0.jpg',
                'imageable_id' => 10,
                'imageable_type' => 'App\Models\Producto'
            ],
            [
                'url' => 'https://www.noroeste.com.mx/binrepository/600x400/0c0/0d0/none/12707/YATB/Canasta_materiales-126596_NO1075031_MG8864900.jpg',
                'imageable_id' => 11,
                'imageable_type' => 'App\Models\Producto'
            ]
        ];
        foreach ($imagenes as $i) {
            Image::create($i);
        }
    }
}
