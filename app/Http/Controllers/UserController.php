<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){

        //$user = new User(); create
        // $user = User::where('id',1)->first(); update where id
        // $user = User::where('id',1)->first(); Read where id
        // $user = User::where('id',1)->get(); READ ALL
       
        // User::where('id',1)->delete(); delete where id
        // $user->username = 'akbar';
        // $user->password = 'akbs';
        // $user->save();
        return view('user/index');
    }

}
