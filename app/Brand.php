<?php

namespace App;

use App\Stock;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {
    /*
     * Properties
     */
    protected $guarded = [];

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
        return groupAlphabetically(Brand::all(), 'name');
    }
}
