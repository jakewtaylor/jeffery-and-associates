<?php

use Illuminate\Database\Seeder;

use App\Brand;

class BrandSeeder extends Seeder {
    public function run () {
        $brands = Storage::disk('seed')->get('brands.json');
        $brands = json_decode($brands);
        foreach ($brands as $b) {
            $brand = Brand::create([
                'name' => $b->brand,
            ]);
        }
    }
}
