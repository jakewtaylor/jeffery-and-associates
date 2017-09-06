<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateUserRequest extends FormRequest {
    public function authorize () {
        return Auth::check();
    }

    public function rules () {
        return [
            'name' => 'required|string',
            'password' => 'nullable|confirmed|string|min:6',
        ];
    }
}
