<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'string',
            'description'=>'string',
            'address'=>'string',
            'phone'=>'string',
            'email'=>'email',
            'logo'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'favicon'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facebook'=>'string',
            'twitter'=>'string',
            'instagram'=>'string',
            'youtube'=>'string',
        ];
    }
}
