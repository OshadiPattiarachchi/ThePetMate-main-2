<?php

namespace App\Http\Controllers;
//use App\Models\Pet;
use App\Models\PetProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $pets = PetProfile::where('user_id', Auth::id())->get();

        return view('find', compact('pets'));
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|max:255',
            'name' => 'required|max:255',
            'gender' => 'required|max:255',
            'breed' => 'required|max:255',
            'pedigree_tested' => 'required|boolean',
            'dna_tested' => 'required|boolean',
            'vaccinated' => 'required|boolean',
            'size' => 'required|max:255',
            'age' => 'required|integer',
            'weight' => 'required|numeric',
            'photos' => 'nullable|file|image|max:2048', // Assuming file upload
            'city' => 'required|max:255'
        ]);

        $validatedData['user_id'] = Auth::id();
        if ($request->hasFile('photos')) {
            $validatedData['photos'] = $request->file('photos')->store('public/pet_photos');
        }

        PetProfile::create($validatedData);
        return redirect()->route('find')->with('success', 'Pet profile created successfully!');
    }

    public function show(PetProfile $petProfile)
    {
        $this->authorize('view', $petProfile);
        return view('petProfiles.show', compact('petProfile'));
    }

    public function edit(PetProfile $petProfile)
    {

        $this->authorize('edit', $petProfile);
        return view('petProfiles.edit', compact('petProfile'));
    }

    public function update(Request $request, PetProfile $petProfile)
    {
        $validatedData = $request->validate([
            'type' => 'required|max:255',
            'name' => 'required|max:255',
            'gender' => 'required|max:255',
            'breed' => 'required|max:255',
            'pedigree_tested' => 'required|boolean',
            'dna_tested' => 'required|boolean',
            'vaccinated' => 'required|boolean',
            'size' => 'required|max:255',
            'age' => 'required|integer',
            'weight' => 'required|numeric',
            'photos' => 'nullable|file|image|max:2048',
            'city' => 'required|max:255'
        ]);

        if ($request->hasFile('photos')) {
            $validatedData['photos'] = $request->file('photos')->store('public/pet_photos');
        }

        $petProfile->update($validatedData);
        return redirect()->route('petProfiles.index')->with('success', 'Pet profile updated successfully!');
    }
    public function findMatch($petId)
    {
        // Find the pet for which a match is being searched
        $pet = PetProfile::findOrFail($petId);

        // Get pets that are of the same type, breed, and compatible age
        $matchedPets = PetProfile::where('type', $pet->type) // Match the species (type)
            ->where('breed', $pet->breed) // Match the breed
            ->where('vaccinated', 1) // Ensure both pets are vaccinated
            ->where('id', '!=', $petId) // Exclude the pet itself
            // ->where('user_id', '!=', $pet->user_id) // Exclude pets from the same user
            ->whereBetween('age', [$pet->age - 2, $pet->age + 2]) // Match pets within 2 years of age
            ->get();

        return view('pets.match', compact('pet', 'matchedPets'));
    }


    public function destroy(PetProfile $petProfile)
    {
        $this->authorize('delete', $petProfile);
        $petProfile->delete();
        return redirect()->route('petProfiles.index')->with('success', 'Pet profile deleted successfully!');
    }

}

