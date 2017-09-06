<?php

use App\Practice;

use Illuminate\Database\Seeder;

class PracticeSeeder extends Seeder {
    public function run () {
        $practices = Storage::disk('seed')->get('practices.json');
        $practices = json_decode($practices, true);

        foreach ($practices as $p) {
            $practice = Practice::create($p);
        }
    }
}
