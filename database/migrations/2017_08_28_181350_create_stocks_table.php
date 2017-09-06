<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration {
    public function up () {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');

            $table->integer('manufacturer_id')->unsigned();
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers');

            $table->string('model');
            $table->string('eyesize');
            $table->string('dbl');
            $table->string('colour');
            $table->integer('price');
            $table->string('year');
            $table->String('code');
        });
    }

    public function down () {
        Schema::dropIfExists('stocks');
    }
}
