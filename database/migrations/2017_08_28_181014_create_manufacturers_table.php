<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManufacturersTable extends Migration {
    public function up () {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 60)->unique();
        });
    }

    public function down () {
        Schema::dropIfExists('manufacturers');
    }
}
