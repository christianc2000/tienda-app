<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UserSeeder::class);
        $this->call(TematicaSeeder::class);
        $this->call(TipoProductoSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(PrecioSeeder::class);
        $this->call(ProductoTematicaSeeder::class);
        $this->call(ProductoContenedorSeeder::class);
        $this->call(InventarioSeeder::class);
        $this->call(ImageSeeder::class);
    }
}
