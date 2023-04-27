<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ChannelSeeder::class,
            VideoSeeder::class,
            CategorySeeder::class,
//            CategoryVideoSeeder::class
        ]);
    }
}
