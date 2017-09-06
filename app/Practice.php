<?php

namespace App;

use Illuminate\Database\Eloquent\{ Model, SoftDeletes };

class Practice extends Model {
    use SoftDeletes;

    /*
     * Properties
     */
    protected $guarded = [];

    /*
     * Accessors
     */
    public function getAddressAttribute () : string {
        $addr = array_filter([
            $this->line1,
            $this->line2,
            $this->city,
            $this->county,
            $this->postcode,
        ]);

        return implode(",\n", $addr);
    }
}
