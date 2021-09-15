<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticateController extends Controller
{
    public function showLoginForm () {
        return view('backend.auth.login');
    }

    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect('/admin');
        } else {
            Session::flash('errors','Email hoặc mật khẩu không chính xác');
            return redirect('/admin/login');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/admin/login');
    }
}
