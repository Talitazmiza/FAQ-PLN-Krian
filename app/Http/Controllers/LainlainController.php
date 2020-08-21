<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LainlainController extends Controller
{
    public function index () {
        return view('admin.upload');
    }

    public function upload (Request $request) {
        dd('Upload berhasil');
    }
}
