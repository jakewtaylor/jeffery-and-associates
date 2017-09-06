<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder {
    public function run () {
        $users = Storage::disk('seed')->get('users.json');
        $users = json_decode($users, true);

        foreach ($users as $u) {
            $u['password'] = bcrypt($u['password']);
            $user = User::create($u);
        }
    }
}
