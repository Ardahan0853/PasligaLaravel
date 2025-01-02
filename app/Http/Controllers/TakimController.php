<?php

namespace App\Http\Controllers;

use App\Http\Requests\TakimStoreRequest;
use App\Models\puanDurumu;
use App\Models\takim;

class TakimController extends Controller
{
    //
    public function createTakim(TakimStoreRequest $validatedRequest)
    {
        $validated = $validatedRequest->validated();

        // Validate and store the logo file
        if ($validatedRequest->hasFile('logo')) {
            // Get the file's original extension
            $imageName = time() . '.' . $validatedRequest->file('logo')->getClientOriginalExtension();

            // Store the file in the 'public/images' directory
            $validatedRequest->file('logo')->move('public/images', $imageName);

            // Get the file's stored path
            $logoPath = 'images/' . $imageName;
        } else {
            return redirect()->back()->withErrors(['logo' => 'File upload failed. Please try again.']);
        }

        // Create the new 'Takim' record with the uploaded file's path
        $takim = Takim::create([
            'name' => $validated['name'],
            'logo' => $logoPath,  // Store the path to the file
            'degerli_oyuncu' => $validated['degerli_oyuncu'],
            'kadro' => null,
        ]);

        $takims = Takim::all();

        // Remove unnecessary fields from validated data
        unset($validated['name'], $validated['logo'], $validated['degerli_oyuncu'], $validated['kadro']);

        // Create the 'puanDurumu' record
        $puanDurumu = puanDurumu::create(array_merge([
            'takim_id' => $takim->id
        ], $validated));
        $puanDurumus = puanDurumu::all();
        // Redirect to the 'puan' route with the newly created records
        return redirect()->route('pasliga.izmir.puan', [
            'puanDurumus' => $puanDurumus,  // Corrected variable name without the '$' sign
            'takims' => $takims,  // Corrected variable name without the '$' sign
        ]);

    }

}
