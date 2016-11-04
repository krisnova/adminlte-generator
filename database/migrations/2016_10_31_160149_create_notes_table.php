<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotesTable extends Migration
{

    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('notable_id')->unsigned();
            $table->string('notable_type', 255);
            $table->text('content');
            $table->smallInteger('priority');
            $table->boolean('active');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('notes');
    }
}