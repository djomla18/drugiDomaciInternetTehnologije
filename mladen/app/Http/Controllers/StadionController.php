<?php

namespace App\Http\Controllers;

use App\Models\Stadion;
use Illuminate\Http\Request;

class StadionController extends Controller
{
    public function get()
    {
        $stadioni = Stadion::all();

        return response()->json([
            'stadioni' => $stadioni,
        ]);
    }
    public function show($id)
    {
        $stadion = Stadion::find($id);
        $utakmice = $stadion->utakmice;

        return view('stadion', [
            'stadion' => $stadion,
            'utakmice' => $utakmice,
        ]);
    }
}
