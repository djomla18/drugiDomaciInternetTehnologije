<?php

namespace Database\Seeders;

use App\Models\Ulaznica;
use App\Models\Utakmica;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UlaznicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 30; $i++) {
            $utakmica = Utakmica::find(rand(1, 30));
            if ($utakmica->povecaj_popunjena());
            Ulaznica::insert([
                'ime_prezime' => Str::random(rand(5, 7)) . " " . Str::random(rand(5, 6)),
                'numerisano_mesto' => rand(1, $utakmica->stadion->broj_mesta),
                'kupljena_at' => Carbon::today()->addDays(rand(40, 70))->addHours(rand(0, 24))->addMinutes(rand(0, 59)),
                'utakmica_id' => $utakmica->id
            ]);
        }
    }
}
