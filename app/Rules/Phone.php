<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Phone implements Rule {
    public function passes ($attribute, $value) {
        return preg_match("/([\+|\~\d]{1,4})?[\d ]+/", $value);
    }

    public function message () {
        return ':attribute must be a phone number!';
    }
}
