<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'name'=> 'required',
            'email' => 'required|email|unique:users,email, '. auth()->user()->id . ',id',
            'phone' => 'required|unique:users,phone, '. auth()->user()->id . ',id',
            'image' => 'image|mimes:jpeg,png|max:500'
        ];
    }
}
