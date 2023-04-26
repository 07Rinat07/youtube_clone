<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 3) as $i) {

            DB::table('users')->insert([
                'name' => "User $i",
                'email' => "user$i@example.com",
                'password' => "password$i"
            ]);
        }
    }
}
