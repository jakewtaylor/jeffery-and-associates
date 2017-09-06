<?php

use Illuminate\Database\Seeder;

use App\Manufacturer;

class ManufacturerSeeder extends Seeder {
    public function run () {
        $manufacturers = Storage::disk('seed')->get('manufacturers.json');
        $manufacturers = json_decode($manufacturers);

        foreach ($manufacturers as $manufacturer) {
            if ($manufacturer->manufacturer === strtolower($manufacturer->manufacturer)) {
                $manufacturer->manufacturer = title_case($manufacturer->manufacturer);
            }

            $m = Manufacturer::create([
                'name' => $manufacturer->manufacturer,
            ]);
        }
    }
}
