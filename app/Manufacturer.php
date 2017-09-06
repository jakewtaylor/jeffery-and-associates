<?php

namespace App;

use App\Stock;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model {
    /*
     * Relations
     */
    public function stock () {
        return $this->hasMany(Stock::class);
    }

    /**
     * Static Functions
     */
    public static function allGroupedAlphabetically () {
        return groupAlphabetically(Manufacturer::all(), 'name');
    }
}
