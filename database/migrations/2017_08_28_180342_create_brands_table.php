<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration {
    public function up () {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 60)->unique();;
        });
    }

    public function down () {
        Schema::dropIfExists('brands');
    }
}
