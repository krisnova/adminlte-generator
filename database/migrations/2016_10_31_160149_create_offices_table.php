<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOfficesTable extends Migration
{

    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prefix', 16);
            $table->string('name', 255);
            $table->smallInteger('priority');
            $table->boolean('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('offices');
    }
}