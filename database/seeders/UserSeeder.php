<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'christian',
            'email' => 'christian@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'celso',
            'email' => 'celso@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'shesly',
            'email' => 'shesly@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'diego',
            'email' => 'diego@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'sonia',
            'email' => 'sonia@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'gahel',
            'email' => 'gahel@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
