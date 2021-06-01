<?php

namespace Database\Seeders;

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
        $this->call(StadionTableSeeder::class);
        $this->call(UtakmicaTableSeeder::class);
        $this->call(UlaznicaTableSeeder::class);
    }
}
