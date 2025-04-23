<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PetProfile;
use App\Models\PetAd;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Display the dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // View all users
    public function viewUsers()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    // View all pets
    public function viewPets()
    {
        $pets = PetProfile::all();
        return view('admin.pets.index', compact('pets'));
    }

    // View all pet ads
    public function viewPetAds()
    {
        $petAds = PetAd::all();
        return view('admin.pet-ads.index', compact('petAds'));
    }

    // Delete a pet
    public function deletePet($id)
    {
        $pet = PetProfile::findOrFail($id);
        $pet->delete();
        return redirect()->route('admin.pets')->with('success', 'Pet profile deleted successfully');
    }

    // Delete a pet ad
    public function deletePetAd($id)
    {
        $petAd = PetAd::findOrFail($id);
        $petAd->delete();
        return redirect()->route('admin.pet-ads')->with('success', 'Pet ad deleted successfully');
    }

    // Delete a user
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully');
    }
}

