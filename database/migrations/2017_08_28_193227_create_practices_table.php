<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticesTable extends Migration {
    public function up () {
        Schema::create('practices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();

            $table->string('name', 60)->unique();
            $table->string('phone', 60);

            $table->string('line1');
            $table->string('line2')->nullable();
            $table->string('city');
            $table->string('county');
            $table->string('postcode');
        });
    }

    public function down () {
        Schema::dropIfExists('practices');
    }
}
