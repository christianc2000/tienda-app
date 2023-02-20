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
                'tipo' => 'Material Escolar'
            ],
            [
                'tipo' => 'Globo de cumpleaño'
            ],
            [
                'tipo' => 'Globo de agua'
            ],
            [
                'tipo' => 'Dulces'
            ],
            [
                'tipo' => 'plastico'
            ],
            [
                'tipo' => 'Gaseosa'
            ],
            [
                'tipo' => 'Agua'
            ],
            [
                'tipo' => 'Enlatado'
            ]
        ];
        foreach ($tipoProductos as $tp) {
            TipoProducto::create($tp);
        }

    }
}
