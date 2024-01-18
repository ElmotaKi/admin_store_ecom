<?php

namespace App\Http\Controllers\Dashbord;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashbord\SettingUpdateRequest;
use App\Models\Setting;
use App\Utils\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class SettingController extends Controller
{
    public function index(){
        return view('dashbord.settings.index');
    }

    public function update(SettingUpdateRequest $request,Setting $setting){
   
        $setting->update($request->validated());
        if ($request->has('logo')) {
            $logo=ImageUpload::uploadImage($request->logo ,200,200,'storage/logo/');
            $setting->update(['logo'=>$logo]);
        
        };
        if ($request->has('favicon')) {
                $favicon=ImageUpload::uploadImage($request->favicon ,32,32,'storage/logo/');
                $setting->update(['favicon'=>$favicon]);
           
           };
        
         //$imagename=date('y-m-d').'.'.$request->logo->extension();
    //     $image =Image::make($request->image->path());
    //     $image->fit($width, $height, function ($constraint) {
    //         $constraint->upsize();
    //     })->save('image');

     return redirect()->route('dashbord.settings.index')->with('success', 'Setting updated successfully');
        }

}