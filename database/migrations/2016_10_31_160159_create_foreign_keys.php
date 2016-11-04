<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration
{

    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers')
                ->onDelete('cascade')
                ->onUpdate('restrict');
        });
        Schema::table('observers', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade')
                ->onUpdate('restrict');
        });
        Schema::table('observers', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('restrict');
        });
        Schema::table('stocks', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade')
                ->onUpdate('restrict');
        });
        Schema::table('stocks', function (Blueprint $table) {
            $table->foreign('office_id')->references('id')->on('offices')
                ->onDelete('cascade')
                ->onUpdate('restrict');
        });
        Schema::table('alerts', function (Blueprint $table) {
            $table->foreign('observer_id')->references('id')->on('observers')
                ->onDelete('cascade')
                ->onUpdate('restrict');
        });
        Schema::table('alerts', function (Blueprint $table) {
            $table->foreign('channel_id')->references('id')->on('channels')
                ->onDelete('cascade')
                ->onUpdate('restrict');
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_manufacturer_id_foreign');
        });
        Schema::table('observers', function (Blueprint $table) {
            $table->dropForeign('observers_product_id_foreign');
        });
        Schema::table('observers', function (Blueprint $table) {
            $table->dropForeign('observers_user_id_foreign');
        });
        Schema::table('stocks', function (Blueprint $table) {
            $table->dropForeign('stocks_product_id_foreign');
        });
        Schema::table('stocks', function (Blueprint $table) {
            $table->dropForeign('stocks_office_id_foreign');
        });
        Schema::table('alerts', function (Blueprint $table) {
            $table->dropForeign('alerts_observer_id_foreign');
        });
        Schema::table('alerts', function (Blueprint $table) {
            $table->dropForeign('alerts_channel_id_foreign');
        });
    }
}