<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getLogin () {
        return view('login');
    }

    public function postLogin(Request $request) {
        dd('Login OK');
    }
}
