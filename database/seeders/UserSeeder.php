<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'Mario',
            'lastname' => 'Garcia',
            'identification' => 1007784144,
            'email' => 'mario@gmail.com',
            'password' => bcrypt('0211')
        ]);

        // DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'PruebaAdmin',
            'lastname' => 'Mundo',
            'identification' => 11111111,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('0211')
        ]);

        DB::table('users')->insert([
            'name' => 'Turista1',
            'lastname' => 'Turista1',
            'identification' => 147825,
            'email' => 'turista1@gmail.com',
            'password' => bcrypt('0211')
        ]);

        DB::table('users')->insert([
            'name' => 'Turista2',
            'lastname' => 'Turista2',
            'identification' => 147825112,
            'email' => 'turista2@gmail.com',
            'password' => bcrypt('0211')
        ]);

        DB::table('users')->insert([
            'name' => 'Taquillero1',
            'lastname' => 'Taquillero',
            'identification' => 12247825,
            'email' => 'taquillero@gmail.com',
            'password' => bcrypt('0211')
        ]);

        DB::table('users')->insert([
            'name' => 'Taquillero2',
            'lastname' => 'Taquillero',
            'identification' => 1227826,
            'email' => 'taquillero2@gmail.com',
            'password' => bcrypt('0211')
        ]);

        DB::table('users')->insert([
            'name' => 'Taquillero3',
            'lastname' => 'Taquillero',
            'identification' => 1555555,
            'email' => 'taquillero3@gmail.com',
            'password' => bcrypt('0211')
        ]);

        // User::factory()->count(100)->create();
    }
}
