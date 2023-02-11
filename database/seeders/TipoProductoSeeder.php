<?php

namespace Database\Seeders;

use App\Models\TipoProducto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoProductos = [
            [
                'tipo' => 'Otro'
            ],
            [
                'tipo' => 'Canasta'
            ],
            [
                'tipo' => 'Piñata'
            ],
            [
                'tipo' => 'Sombrero'
            ],
            [
                'tipo' => 'Libro'
            ],
        ];
        foreach ($tipoProductos as $tp) {
            TipoProducto::create($tp);
        }
    }
}
