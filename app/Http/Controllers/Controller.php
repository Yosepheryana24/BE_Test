<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    //  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function uploadImg($check, $file, $path, $name)
    {
        // Check Directory
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        // Delete File is Exists
        if (!empty($check)) {
            File::delete($check);
        }

        if ($name != '') {
            $namefile = $name . '.' . $file->getClientOriginalName();
        } else {
            $namefile = $file->getClientOriginalName();
        }

        $fullPath = $path . '/' . $namefile;

        if ($file->getClientMimeType() == "application/pdf") {
            $file->move($path, $namefile);
        } else {
            // cut size image
            //  Image::make(realpath($file))->save($fullPath);
            // dd($fullPath);
            Image::make($file->getRealPath())->resize(800, 750, function ($constraint) {
                $constraint->aspectRatio();
            })->save($fullPath);

            //  $quick = Image::cache(function($image) use ($file, $fullPath) {
            //    return $image->make($file)->resize(480, 360)->save($fullPath);
            // });
        }

        return $fullPath;
    }
}
