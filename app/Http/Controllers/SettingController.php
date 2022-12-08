<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use App\Utils\ImageUpload;
use Image;

class SettingController extends Controller
{

    public function index()
    {
        return view('dashboard.settings.index');
    }

    public function create()
    {
        //
    }

    public function store(StoreSettingRequest $request)
    {
        //
    }

    public function show(Setting $setting)
    {
        //
    }
    public function edit(Setting $setting)
    {
        //
    }
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $setting->update($request->validated());
        ImageUpload::uploadImage();
        $setting->update(['logo'=>'public/'.$imageName]);

        return redirect()->route('dashboard.settings.index')->with('success','تم تحديث الإعدادات بنجاحweb.php');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
