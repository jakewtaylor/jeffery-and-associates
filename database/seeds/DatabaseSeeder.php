<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run () {
        $this->call(UserSeeder::class);
        $this->call(PracticeSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(ManufacturerSeeder::class);
    }
}
