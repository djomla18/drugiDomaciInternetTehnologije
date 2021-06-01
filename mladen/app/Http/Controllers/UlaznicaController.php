<?php

namespace App\Http\Controllers;

use App\Models\Ulaznica;
use App\Models\Utakmica;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UlaznicaController extends Controller
{
    public function store(Request $request)
    {
        $ime_prezime = $request->input('ime_prezime');
        $numerisano_mesto = $request->input('numerisano_mesto');
        $kupljena_at = Carbon::now();
        $utakmica_id = $request->input('utakmica_id');

        if ($utakmica_id) {
            $utakmica = Utakmica::find($utakmica_id);
            $ulaznice = $utakmica->ulaznice;

            foreach ($ulaznice as $ulaznica) {
                if ($ulaznica->numerisano_mesto == $numerisano_mesto)
                    return response()->json([
                        'message' => "To mesto je vec numerisano, izaberite neko drugo!"
                    ]);
            }
            if ($utakmica->povecaj_popunjena()) {
                Ulaznica::insert([
                    'ime_prezime' => $ime_prezime,
                    'kupljena_at' => $kupljena_at,
                    'numerisano_mesto' => $numerisano_mesto,
                    'utakmica_id' => $utakmica_id
                ]);
                return response()->json([
                    'message' => "Uspesno kupljena ulaznica!"
                ]);
            } else return response()->json([
                'message' => "Popunjena su sva mesta!"
            ]);
        }
    }
}
