<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('profiles')->delete();

        DB::table('profiles')->insert([
            'fkuser' => 1,
            'fkrol' => 1
        ]);

        // DB::table('profiles')->delete();

        DB::table('profiles')->insert([
            'fkuser' => 2,
            'fkrol' => 1
        ]);

        DB::table('profiles')->insert([
            'fkuser' => 3,
            'fkrol' => 3
        ]);

        DB::table('profiles')->insert([
            'fkuser' => 4,
            'fkrol' => 3
        ]);

        DB::table('profiles')->insert([
            'fkuser' => 5,
            'fkrol' => 2
        ]);

        DB::table('profiles')->insert([
            'fkuser' => 6,
            'fkrol' => 2
        ]);

        DB::table('profiles')->insert([
            'fkuser' => 7,
            'fkrol' => 2
        ]);

        // Profile::factory()->count(100)->create();
    }
}
