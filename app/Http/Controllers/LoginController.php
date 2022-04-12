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
        $user->name = 'Sienna Azka Laksana';
        $user->email = 'admincantik@gmail.com';
        $user->password = Hash::make('sienna<3tangguh');
        $user->save();
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        $user = new User();
        $user->name = Request()->name;
        $user->email = Request()->email;
        $user->password = Hash::make(Request()->password);
        $user->role = 1;
        $user->save();
        return redirect(url('/'))->with('message',"Registration successful, please login");
    }
    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'email'=>'required|email:dns',
            'password' => 'required|min:6'
        ]);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 1) {
                return redirect()->intended('/');
            }else if (auth()->user()->role == 2)  {
                return redirect()->intended('/dashboard');
            }
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
