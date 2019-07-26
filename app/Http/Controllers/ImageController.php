<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function index() 
    {
    	return view('images.index');
    }

    public function view()
    {
    	$images = \File::allFiles(public_path('images'));
		return view('images.viewpublicimages.viewimage',compact('images'))->with('images',$images);
    }

    public function viewupload()
    {
    	return view('images.viewpublicimages.imageupload');
    }


    public function store(Request $request)
    {
        $image = new Image;
        $image->image = $request->image;
        $image->save();
    	$image = $request->file('image');
        $input['imagename'] =$image->getClientOriginalName();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);
    	return back();
    }

    public function delete()
    {
        // $image = Image::get()->all();
        // $image = delete('/asset/images');
        // return back();
    }

}
