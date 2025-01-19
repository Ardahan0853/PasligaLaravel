<?php

namespace App\Http\Controllers;

use App\Http\Requests\gecmisMaclarRequest;
use App\Http\Requests\kapRequest;
use App\Models\gecmisMaclar;
use App\Models\kadroMember;
use App\Models\kap;
use App\Models\takim;
use App\Models\User;

class izmirLigiController extends Controller
{
    //

    public function golKrali()
    {

        ///takimi istiyorum oyuncuya baglantili olan
        $allMembers = kadroMember::orderBy('gol_sayisi', 'desc')->get();

        return view('pasliga.izmir-ligi.golkralligi', [
            'allMembers' => $allMembers
        ]);
    }

    public function gecmisMaclar()
    {
        $allGecmisMaclar = gecmisMaclar::all();
        $allTeams = takim::all();
        $logo1 = session('logo1');
        $logo2 = session('logo2');

        return view('pasliga.izmir-ligi.gecmis-maclar', [
            'allGecmisMaclar' => $allGecmisMaclar,
            'allTeams' => $allTeams,
            'logo1' => $logo1,
            'logo2' => $logo2
        ]);
    }

    public function createGecmisMaclar(gecmisMaclarRequest $request)
    {
        $validated = $request->validated();

        $takim_1_name = $validated['takim_1_name'];
        $takim_2_name = $validated['takim_2_name'];
        $allTeams = takim::all();

        $logo1 = $allTeams->where('name', $takim_1_name)->first()->logo;
        $logo2 = $allTeams->where('name', $takim_2_name)->first()->logo;



        session(['logo1' => $logo1, 'logo2' => $logo2]);
        $gecmisMaclar = gecmisMaclar::create(array_merge($validated, ['takim_1_logo' => $logo1, 'takim_2_logo' => $logo2]));
        return redirect()->route('izmir-ligi.gecmisMaclar', [
            'gecmisMaclar' => $gecmisMaclar,

        ])->with('logo1', $logo1)->with('logo2', $logo2)->with('success', 'Maç başarıyla eklendi');
    }

    public function kap()
    {
        $allTakims = takim::all();
        $allKadroMembers = kadroMember::all();
        $users = User::all();
        $teams = takim::all();
        $kaps = kap::all();
        return view('pasliga.izmir-ligi.kap', [
            'allKadroMembers' => $allKadroMembers,
            'allTakims' => $allTakims,
            'users' => $users,
            'teams' => $teams,
            'kaps' => $kaps
        ]);
    }

    public function kapCreate(kapRequest $request)
    {
        $validated = $request->validated();
        $kap = kap::create($validated);
        $users = User::all();
        return redirect()->route('izmir-ligi.kap',[
            'kap' => $kap,
            'users' => $users
        ])->with('success', 'Kadro başarıyla güncellendi');
    }
}
