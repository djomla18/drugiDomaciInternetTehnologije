<?php

namespace Database\Seeders;

use App\Models\Stadion;
use Illuminate\Database\Seeder;

class StadionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stadion::insert([
            'grad' => 'Beograd',
            'naziv' => 'Stadion Rajko Mitic',
            'broj_mesta' => 15
        ]);
        Stadion::insert([
            'grad' => 'Beograd',
            'naziv' => 'Stadion Partizana',
            'broj_mesta' => 15
        ]);
        Stadion::insert([
            'grad' => 'Liverpool',
            'naziv' => 'Anfield',
            'broj_mesta' => 20
        ]);
        Stadion::insert([
            'grad' => 'Manchester',
            'naziv' => 'Eithad Stadium',
            'broj_mesta' => 23
        ]);
        Stadion::insert([
            'grad' => 'London',
            'naziv' => 'Stamford Bridge',
            'broj_mesta' => 26
        ]);
        Stadion::insert([
            'grad' => 'Sheffield',
            'naziv' => 'Hillsborough Stadium',
            'broj_mesta' => 18
        ]);
    }
}
