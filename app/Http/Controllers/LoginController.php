<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login.index');
    }
    public function register()
    {
        $user = new User();
        $user->name = 'Epoxy Administrator';
        $user->email = 'epoxy@gmail.com';
        $user->role = 1;
        $user->password = Hash::make('epoxy123');
        $user->save();
    }
    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'email'=>'required|email:dns',
            'password' => 'required|min:6'
        ]);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');

        }
        return back()->with('loginError','Login Failed ! the password or email may be wrong and the email may not be registered');

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

    }
}
