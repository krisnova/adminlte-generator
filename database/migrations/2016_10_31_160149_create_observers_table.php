<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObserversTable extends Migration
{

    public function up()
    {
        Schema::create('observers', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('stock');
            $table->boolean('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('observers');
    }
}