<?php

namespace App\Http\Controllers;

use App\Http\Requests\haberRequest;
use App\Http\Requests\kadroMemberRequest;
use App\Http\Requests\TakimStoreRequest;
use App\Models\haberler;
use App\Models\kadro;
use App\Models\kadroMember;
use App\Models\puanDurumu;
use App\Models\takim;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class TakimController extends Controller
{
    //

    public function index()
    {
        $takims = Takim::all();
        $puanDurumus = puanDurumu::all();
        // Redirect to the 'puan' route with the newly created records
        return redirect()->route('izmir.puan', [
            'puanDurumus' => $puanDurumus,  // Corrected variable name without the '$' sign
            'takims' => $takims,  // Corrected variable name without the '$' sign
        ]);
    }

    public function kadroIndex(takim $takim)
    {
        $butunTakimlar = takim::all();

        $kadro = kadro::where('takim_id', $takim->id)->first();

        $butunKadro = kadroMember::where('kadro_id', $kadro->id)->get();
        $golKrali = kadroMember::orderBy('gol_sayisi', 'desc')->get();
        $users = User::all();
        return view('pasliga.izmir.kadro', [
            'butunTakimlar' => $butunTakimlar,
            'takim' => $takim,
            'kadro' => $kadro,
            'users' => $users,
            'butunKadro' => $butunKadro,
            'golKrali' => $golKrali
        ]);
    }

    public function createTakim(TakimStoreRequest $validatedRequest)
    {
        $validated = $validatedRequest->validated();

        // Validate and store the logo file
        if ($validatedRequest->hasFile('logo')) {
            // Get the file's original extension
            $imageName = time() . '.' . $validatedRequest->file('logo')->getClientOriginalExtension();

            // Store the file in the 'public/images' directory
            Storage::disk('public')->put('images/' . $imageName, $validatedRequest->file('logo')->get());
            $path = $validatedRequest->file('logo')->storeAs($imageName);


            // Get the file's stored path

        } else {
            return redirect()->back()->withErrors(['logo' => 'File upload failed. Please try again.']);
        }

        // Create the new 'Takim' record with the uploaded file's path\

        $takim = Takim::create([
            'name' => $validated['name'],
            'logo' => $path,  // Store the path to the file
            'kaptan' => $validated['kaptan'],
            'kurulus_tarihi' => $validated['kurulus_tarihi'],
            'deger' => $validated['deger'],
        ]);
        $kadro = kadro::create([
            'takim_id' => $takim->id
        ]);
        $takim->update([
            'kadro_id' => $kadro->id
        ]);

        $takims = Takim::all();

        // Remove unnecessary fields from validated data
        unset($validated['name'], $validated['logo'], $validated['degerli_oyuncu'], $validated['kadro'],
            $validated['kaptan'], $validated['kurulus_tarihi'], $validated['deger']);

        // Create the 'puanDurumu' record
        puanDurumu::create(array_merge([
            'takim_id' => $takim->id
        ], $validated));
        $puanDurumus = puanDurumu::all();
        // Redirect to the 'puan' route with the newly created records
        return redirect()->route('izmir.puan', [
            'puanDurumus' => $puanDurumus,  // Corrected variable name without the '$' sign
            'takims' => $takims,
            'kadro' => $kadro
        ]);

    }

    public function kadroMemberCreate(kadroMemberRequest $request, kadro $kadro)
    {

        $validated = $request->validated();
        $validated['name'] = User::where('id', $validated['name'])->first()->full_name;
        $takim = takim::where('id', $kadro->takim_id)->first();
        kadroMember::create(array_merge($validated, ['kadro_id' => $kadro->id]));
        $butunTakimlar = takim::all();
        $butunKadro = kadroMember::all();
        return redirect()->route('takim.kadroIndex', [
            'kadro' => $kadro,
            'takim' => $takim,
            'butunTakimlar' => $butunTakimlar,
            'butunKadro' => $butunKadro
        ]);


    }

    public function edit(takim $takim)
    {
        $butunTakimlar = takim::all();
        $allMembers = kadroMember::all();
        $memberValue = kadroMember::orderBy('deger', 'desc')->get();
        return view('pasliga.izmir.takim-edit', [
            'takim' => $takim,
            'butunTakimlar' => $butunTakimlar,
            'allMembers' => $allMembers,
            'memberValue' => $memberValue
        ]);
    }

    public function createHaber(haberRequest $request, takim $takim)
    {


        $validated = $request->validated();

        // Validate and store the logo file
        if ($request->hasFile('image')) {
            // Get the file's original extension
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();

            // Store the file in the 'public/images' directory
            Storage::disk('public')->put('images/' . $imageName, $request->file('image')->get());
            $path = $request->file('image')->storeAs($imageName);


            // Get the file's stored path

        } else {
            return redirect()->back()->withErrors(['logo' => 'File upload failed. Please try again.']);
        }

        haberler::class::create([
            'title' => $validated['title'],
            'image' => $path,  // Store the path to the file
            'takim_id' => $takim->id,
            'content' => $validated['content'],
        ]);
        kadro::create([
            'takim_id' => $takim->id
        ]);


        return redirect()->route('takim.edit', [
            'takim' => $takim
        ]);
    }

    public function takimGenel(takim $takim)
    {
        $butunTakimlar = takim::all();
        $allMembers = kadroMember::all();
        $memberValue = kadroMember::orderBy('deger', 'desc')->get();
        return view('pasliga.izmir.takim-edit', [
            'takim' => $takim,
            'butunTakimlar' => $butunTakimlar,
            'allMembers' => $allMembers,
            'memberValue' => $memberValue
        ]);
    }

    public function destroy(takim $takim)
    {
        $takim->kadro->oyuncu->delete();
        $takim->kadro->delete();
        $takim->delete();
        return redirect()->route('takim.index');
    }

    public function editOyuncu(takim $takim, kadroMember $oyuncu,)
    {
        $users = User::all();
       return view('pasliga.izmir.oyuncu', [
            'oyuncu' => $oyuncu,
            'takim' => $takim,
            'users' => $users
        ]);
    }

    public function updateOyuncu(takim $takim, kadroMember $oyuncu, kadroMemberRequest $request )
    {
        $validated = $request->validated();

         $validated['name'] = User::where('id', $validated['name'])->first()->full_name;

        $oyuncu->update($validated);

        return redirect()->route('takim.kadroIndex', [
            'takim' => $takim
        ]);
    }
}
