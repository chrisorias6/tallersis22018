<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class abmservicios extends Controller
{

    function index (Request $request)
    {
        return view('Servicios_abm.index');
    }
}
