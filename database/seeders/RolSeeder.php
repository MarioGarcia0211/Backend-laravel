<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rols')->delete();

        DB::table('rols')->insert([
            'rol' => 'Administrador'
        ]);

        DB::table('rols')->insert([
            'rol' => 'Taquillero'
        ]);

        DB::table('rols')->insert([
            'rol' => 'Turista'
        ]);
    }
}
