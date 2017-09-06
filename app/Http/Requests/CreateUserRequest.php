<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateUserRequest extends FormRequest {
    public function authorize () {
        return Auth::check();
    }

    public function rules () {
        return [
            'name' => 'required|string',
            'username' => 'required|string|min:3|regex:/[a-zA-Z0-9\_]+/',
            'password' => 'required|confirmed|string|min:6',
        ];
    }
}
