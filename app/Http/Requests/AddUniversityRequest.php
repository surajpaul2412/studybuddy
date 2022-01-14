<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;

class AddUniversityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'=>'required|string|min:2|max:255',
            'last_name'=>"nullable|string|min:2|max:255",
            'email'=>"required|email|max:255|unique:users",
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'country'=>'required|string|min:2|max:255',
            'city'=>'required|string|min:2|max:255',
            'avatar'=> 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'required|min:6|string|confirmed',
            'email_domain' => 'required|string',
        ];
    }
}
