<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin () {
        return view ('login');
    }

    public function postLogin (Request $request) {
        if(\Auth::attempt(['name' => $request->name, 'password' => $request->password])){
            return view('admin.showData');
        }else{
            return view('login')->with('success', 'Gagal Login');
        }
    }

    public function logout (Request $request) {
        return redirect('/login');
    }
}
