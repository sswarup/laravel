<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Session;

class UserRequest extends Request
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
        $validation =  [
            'email'=>'required|email',
            'password'=>'required|min:4',
        ];
        
        if(Session::get('signup')){
            $validation['name'] = 'required';
            $validation['email']='required|email|unique:users';
            $validation['password']='required|min:4|confirmed';
            $validation['password_confirmation'] = 'required';
        }
        
        return $validation;
    }
}
