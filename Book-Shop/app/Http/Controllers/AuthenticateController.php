<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

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
            $request->session()->flash('errors', 'Email hoặc mật khẩu không chính xác');
            return redirect('/admin/login');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/admin/login');
    }
    
    public function resetPassword() {
        return view('backend.me.reset_password');
    }

    public function updatePassword(Request $request) {
        
        if(Hash::check($request->input('old_pass'),  Auth::user()->password )){
            if ($request->input('new_pass') == $request->input('re_new_pass')) {
                Auth::user()->update(['password' => $request->input('new_pass')]);
                return redirect('admin/profile');
            } else {
                $request->session()->flash('errors', 'Nhập lại mật khẩu không chính xác');
                return redirect('/admin/resetpassword');
            }
        } else {
            $request->session()->flash('errors', 'Mật khẩu cũ không chính xác');
            return redirect('/admin/resetpassword');
        }
    }
}
