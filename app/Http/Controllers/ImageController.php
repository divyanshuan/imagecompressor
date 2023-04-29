<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ImageController extends Controller
{
    //
    public function store(Request $request)
    {
        # code...

        $x = 10;
        if ($request->file != "") {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $img = \Image::make($file);

            $img->save(\public_path($filename), $x);
            return back();
        }
    }
}
