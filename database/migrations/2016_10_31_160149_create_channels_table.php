<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChannelsTable extends Migration
{

    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('notification', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('channels');
    }
}