<?php

namespace Database\Seeders;

use App\Models\ProductoContenedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoContenedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductoContenedor::create([
            'padre_id' => 11,
            'hijo_id' => 1,
            'cantidad' => 50
        ]);
    }
}
