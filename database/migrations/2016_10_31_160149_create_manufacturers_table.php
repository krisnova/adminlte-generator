<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManufacturersTable extends Migration
{

    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('url', 255);
            $table->binary('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('manufacturers');
    }
}


//php artisan crud:generate Manufacturers --fields="name#string; url#string; image#binary;" --view-path=warehouse --controller-namespace=Warehouse --route-group=warehouse