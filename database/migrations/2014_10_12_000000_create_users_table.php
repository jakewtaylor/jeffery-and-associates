<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
    public function up () {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->softDeletes();

            $table->string('name');
            $table->string('username', 60)->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down () {
        Schema::dropIfExists('users');
    }
}
