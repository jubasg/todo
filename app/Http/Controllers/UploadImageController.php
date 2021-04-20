<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    //
    public function UploadImage(Request $request)
    {

        if($request->hasFile('image'))
        {
            $filename = $request->file('image')->getClientOriginalName();
            Image::saveFile($request);
            $image = Image::create(
                [
                    'filename' => $filename
                ]);
            return 'File uploaded usando controller';
        }
        return response();

    }
}
