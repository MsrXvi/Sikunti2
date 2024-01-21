<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = User::with('profiles')->get();
        dd($profiles);
        return view('profile.index',compact('profiles'));
    }
}
