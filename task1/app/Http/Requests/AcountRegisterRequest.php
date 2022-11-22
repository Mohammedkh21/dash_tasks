<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcountRegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100|unique:users,name',
            'email' => 'required|email|max:255|unique:users,email',
            'password' =>'required',
            'confirm_password' => 'same:password'
        ];
    }
        public function messages(){
        return [
            'name.required' =>'name required' ,
            'name.max' =>'name maximum laters is 100' ,
            'name.unique' =>'this name exist try another one' ,
            'email.required' =>'email required' ,
            'name.max' =>'name maximum laters is 255' ,

            'email.unique' =>'this email exist try another one' ,
            'confirm_password.same' => 'the password doesnt match confirm password'
            ];
        }

}
