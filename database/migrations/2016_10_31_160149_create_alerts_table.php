<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlertsTable extends Migration
{

    public function up()
    {
        Schema::create('alerts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('observer_id')->unsigned();
            $table->integer('channel_id')->unsigned();
            $table->smallInteger('priority');
            $table->boolean('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('alerts');
    }
}