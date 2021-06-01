<?php

namespace App\Http\Controllers;

use App\Models\Utakmica;
use Illuminate\Http\Request;

class UtakmicaController extends Controller
{
    public function get()
    {

        $utakmice = Utakmica::with('stadion')->get();

        return response()->json([
            'utakmice' => $utakmice
        ]);
    }

    public function show($utakmica_id)
    {
        $utakmica = Utakmica::find($utakmica_id);
        $ulaznice = $utakmica->ulaznice;
        $stadion = $utakmica->stadion;
        $zauzeta_mesta = array();
        foreach ($ulaznice as  $ulaznica) {
            array_push($zauzeta_mesta, $ulaznica->numerisano_mesto);
        }
        $sva_mesta = range(1, $stadion->broj_mesta);
        $slobodna_mesta = array_diff($sva_mesta, $zauzeta_mesta);

        return view('utakmica', [
            'utakmica' => $utakmica,
            'ulaznice' => $ulaznice,
            'stadion' => $stadion,
            'slobodna_mesta' => $slobodna_mesta
        ]);
    }

    public function destroy($utakmica_id)
    {
        $utakmica = Utakmica::find($utakmica_id);
        $utakmica->delete();
    }
}
