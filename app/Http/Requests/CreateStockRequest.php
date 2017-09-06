<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateStockRequest extends FormRequest {
    public function authorize () {
        return Auth::check();
    }

    public function rules () {
        return [
            'brand' => 'required|integer|exists:brands,id',
            'model' => 'required|string',
            'eyesize' => 'required|string',
            'dbl' => 'required|string',
            'colour' => 'required|string',
            'manufacturer' => 'required|integer|exists:manufacturers,id',
            'price' => 'required|numeric',
            'year' => 'required|integer',
            'code' => 'required|string',
        ];
    }
}
