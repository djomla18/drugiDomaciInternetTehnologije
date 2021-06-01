<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StranicaController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function stadioni()
    {
        return view('stadioni');
    }
    public function utakmice()
    {
        return view('utakmice');
    }
}
