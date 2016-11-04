<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStocksTable extends Migration
{

    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('office_id')->unsigned();
            $table->integer('quantity');
            $table->smallInteger('priority');
            $table->boolean('forced');
            $table->boolean('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('stocks');
    }
}