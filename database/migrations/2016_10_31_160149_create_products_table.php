<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->integer('manufacturer_id')->unsigned();
			$table->string('gtin', 255);
			$table->float('repurchase_price');
			$table->float('retail_price');
			$table->float('weight');
            $table->binary('image');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}

