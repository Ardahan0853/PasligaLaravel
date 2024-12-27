<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasligaController extends Controller
{
    //
    public function index()
    {
        return view('pasliga.izmir.index');
    }

    public function haberler()
    {
        return view('pasliga.izmir.haberler');
    }

    public function puan()
    {
        return view('pasliga.izmir.puan');
    }
}
