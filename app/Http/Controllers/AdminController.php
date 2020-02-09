<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function getLogin () {
        return view('/login');
    }

    public function postLogin(Request $request) {
        
        // $this->validate($request, [
        //     'name' => 'required',
        //     'password' => 'required',
        // ]);

        // if(Auth::guard('admin')->attempt(['name' => $request->name, 'password' => $request->password]))
        // {
        //     return 'login berhasil';
        // }

        // return 'login gagal';

        return view('admin.createData');
    }
}
