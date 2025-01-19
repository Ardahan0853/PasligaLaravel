<?php

namespace App\Http\Controllers;

use App\Http\Requests\HaberlerRequest;
use App\Http\Requests\LoginPasligaRequest;
use App\Http\Requests\pasligaKayitRequest;
use App\Models\gecmisMaclar;
use App\Models\haberler;
use App\Models\kadroMember;
use App\Models\takim;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class PasligaController extends Controller
{
    //
    protected $butunTakimlar;
    protected $butunKadro;
    protected $golKrali;

    protected $macSonuclari;

    public function __construct()
    {
        $this->butunTakimlar = takim::all();
        $this->butunKadro = kadroMember::all();
        $this->oyuncuDeger = kadroMember::orderBy('deger', 'desc')->get();
        $this->golKrali = kadroMember::orderBy('gol_sayisi', 'desc')->get();
        $this->macSonuclari = gecmisMaclar::all();

    }
    public function index()
    {

        return view('pasliga.izmir.index', [
            'butunTakimlar' => $this->butunTakimlar,
            'butunKadro' => $this->butunKadro,
            'allMembers' => $this->golKrali,
            'macSonuclari' => $this->macSonuclari,
            'oyuncuDeger' => $this->oyuncuDeger
        ]);
    }

    public function haberler()
    {
        $allTeams = takim::all();
        $haberler = haberler::paginate(10);
        return view('pasliga.izmir.haberler', [
            'allTeams' => $allTeams,
            'haberler' => $haberler
        ]);
    }

    public function createHaber(HaberlerRequest $validatedRequest, Request $request)
    {



        $validated = $validatedRequest->validated();

        $takim = takim::where('name', $validated['takim'])->first();

        $imageName = null;
        // Validate and store the logo file
        if ($validatedRequest->hasFile('image')) {
            // Get the file's original extension
            $imageName = time() . '.' . $validatedRequest->file('image')->getClientOriginalExtension();

            // Store the file in the 'public/images' directory
            Storage::disk('public')->put('images/' . $imageName, $validatedRequest->file('image')->get());
            $path = $validatedRequest->file('image')->storeAs($imageName);


            // Get the file's stored path

        } else {
            return redirect()->back()->withErrors(['logo' => 'File upload failed. Please try again.']);
        }
        haberler::create(array_merge($validated, ['takim_id' => $takim->id], ['image' => $imageName]));
        return redirect()->route('izmir.haberler');
    }

    public function haberEdit(haberler $haber)
    {
        return view('pasliga.izmir.haberEdit', [
            'haber' => $haber,
            'allTeams' => takim::all()
        ]);
    }

    public function haberUpdate(HaberlerRequest $validatedRequest, haberler $haber)
    {
        $validated = $validatedRequest->validated();

        $takim = takim::where('name', $validated['takim'])->first();

        $imageName = null;
        // Validate and store the logo file
        if ($validatedRequest->hasFile('image')) {
            // Get the file's original extension
            $imageName = time() . '.' . $validatedRequest->file('image')->getClientOriginalExtension();

            // Store the file in the 'public/images' directory
            Storage::disk('public')->put('images/' . $imageName, $validatedRequest->file('image')->get());
            $path = $validatedRequest->file('image')->storeAs($imageName);


            // Get the file's stored path

        } else {
            return redirect()->back()->withErrors(['logo' => 'File upload failed. Please try again.']);
        }
        $haber->update(array_merge($validated, ['takim_id' => $takim->id], ['image' => $imageName]));
        return redirect()->route('izmir.haberler');
    }

    public function haberDestroy(haberler $haber)
    {
        $haber->delete();
        return redirect()->route('izmir.haberler');
    }

    public function puan()
    {
        $takims = Takim::with('takimPuan')->get();
        return view('pasliga.izmir.puan',
            [
                'takims' => $takims
            ]);
    }

    public function uyeler()
    {

        $users = User::paginate(10);
        return view('pasliga.izmir.uyeler', [
            'users' => $users
        ]);

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

        if (Auth::attempt($validated)) {
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
