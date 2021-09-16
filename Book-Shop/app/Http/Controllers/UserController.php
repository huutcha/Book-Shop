<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersInformation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function updateAvatar(Request $request) {
        $file = $request->file('avatar');
        if (Storage::disk('avatars')->exists(Auth::user()->information->avatar)) {
            Storage::disk('avatars')->delete(Auth::user()->information->avatar);
        }
        $file->storeAs('', $file->getClientOriginalName(), 'avatars');
        Auth::user()->information->update(['avatar' => $file->getClientOriginalName()]);
        return back();
    }    
}
