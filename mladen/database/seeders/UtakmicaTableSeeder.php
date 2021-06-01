<?php

namespace Database\Seeders;

use App\Models\Utakmica;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UtakmicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 30; $i++) {
            Utakmica::insert([
                'cena' => 100 * rand(50, 600),
                'tim_domacin' => Str::random(rand(5, 15)) . " " . Str::random(rand(5, 10)) . " FC",
                'tim_gost' => Str::random(rand(5, 15)) . " " . Str::random(rand(5, 10)) . " FC",
                'odrzava_se_at' => Carbon::today()->addDays(rand(60, 400))->addHours(rand(12, 21)),
                'stadion_id' => rand(1, 6) // 6 stadiona postoji
            ]);
        }
    }
}
