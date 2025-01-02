<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginPasligaRequest;
use App\Http\Requests\pasligaKayitRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

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

    public function kayit()
    {

        return view('pasliga.izmir.kayit');


    }

    public function getLogin()
    {
        return view('pasliga.izmir.giris');
    }

    public function register(pasligaKayitRequest $validatedRequest, Request $request, User $user)
    {
        // Log raw request data
        // Attempt validation
        $validated = $validatedRequest->validated();
        $validated['full_name'] = $validated['first_name'] . ' ' . $validated['last_name'];
        unset($validated['first_name'], $validated['last_name']);
        $createdUser = $user::create($validated);

        // Log the user in
        Auth::login($createdUser);

        $validatedRequest->session()->regenerate();

        return redirect()->route('izmir.index');

    }
    public function login(LoginPasligaRequest $validatedRequest)
    {
        $validated = $validatedRequest->validated();

        if(Auth::attempt($validated)){
            $validatedRequest->session()->regenerate();
            return redirect()->route('izmir.index');
        }
        // Log the user in


        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        \request()->session()->invalidate();
        \request()->session()->regenerateToken();
        return redirect()->route('izmir.index');
    }
}
