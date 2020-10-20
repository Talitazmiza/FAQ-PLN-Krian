<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UploadImage;

class UploadImageController extends Controller
{
    public function index () {
        $images = UploadImage::get();
        return view('admin.imageUpload', compact('images'));
    }

    public function upload (Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();

        $request->image->move(public_path('images'), $input['image']);


        $input['title'] = $request->title;

        UploadImage::create($input);


    	return back()->with('success','Image Uploaded successfully.');
    }

    public function destroy ($id) {
        UploadImage::find($id)->delete();

    	return back()->with('success','Image removed successfully.');
    }
}
