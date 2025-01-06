<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\kadroMember;
use App\Models\takim;
use Illuminate\Http\Request;

class izmirLigiController extends Controller
{
    //

    public function golKrali()
    {
        $takims = Takim::all();
        $members = kadroMember::all();
        return view('pasliga.izmir-ligi.golkralligi',[
            'takims' => $takims,
            'members' => $members
        ]);
    }
}
