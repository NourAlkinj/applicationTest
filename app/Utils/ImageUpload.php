<?php


namespace App\Utils;


class ImageUpload
{
    public static function uploadImage($request,$height=null,$width=null)
    {
        $imageName=date('Y-m-d').'.'.$request->logo->extension();
        $logo = Image::make($request->logo->path());
        $logo->fit(200,200,function ($constraint) {
            $constraint->upsize();
        })->stream;
        Storage::disk('public')->put($imageName,$logo);
        $setting->update(['logo'=>'public/'.$imageName]);

    }

}
