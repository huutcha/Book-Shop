<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersInformation;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showProfile() {
        return view('backend.me.profile');
    }

    public function editProfile() {
        return view('backend.me.edit_profile');
    }

    public function updateProfile(Request $request) {
        Auth::user()->information->update($request->input());
        return redirect('admin/profile');
    }

    
}
