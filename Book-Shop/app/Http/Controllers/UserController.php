<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersInformation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    

    public function index()
    {   
        if (Auth::user()->role == 'Admin'){
            $users = User::where(['role' => '3'])->get();
        } else {
            $users = User::all();
        }
        
        return view('backend.user.index', compact('users'));
    }

    public function create()
    {
        return view('backend.user.create');
    }

    public function store(Request $request)
    {
        $user = User::create($request->input());
        UsersInformation::create(['user_id' => $user->id]);
        return redirect('admin/users/'.$user->id.'/information');
    }

    public function edit(User $user)
    {
        return view('backend.user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {   
        if(!$request->input('password')){
            $data = [
                'email' => $request->input('email'),
                'role' => $request->input('role'),
                'point' => $request->input('point'),
                'hehe' => 'huu'
            ];
        } else {
            $data = $request->input();
        }
        
        $user->update($data);
        $user->information->update($request->input());
        return redirect('admin/users');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('admin/users');
    }
}
