<?php
namespace App\Utils;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ImageUpload 
{
    public static function uploadImage($request, $height=null , $width=null,$path=null)
    
    {
        
        $imagename=Str::uuid().date('-y-m-d-h-m-s'). '.' .$request->extension();
        
        [$withDefault,$heightDefault]=getimagesize($request);
        $height=$height ?? $heightDefault;
        $width = $width ?? $withDefault;
        $image =Image::make($request->path());
        
        $image->fit($width, $height, function ($constraint) {
            $constraint->upsize();
        })->stream();
        Storage::disk('images')->put($path.$imagename,$image);

        return $path.$imagename;
    }

}