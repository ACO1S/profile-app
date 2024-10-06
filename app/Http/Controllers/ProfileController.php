<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getAllProfiles () 
    {
        $profile = Profile::all();
        return view('profiles', ['profiles' => $profile]);
    }

    public function getProfile($id)
    {
        $profile = Profile::findOrFail($id);
        
        return view('profile', compact('profile'));
    }

}