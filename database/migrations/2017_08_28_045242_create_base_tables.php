<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
	        $table->increments('id');
	        $table->string('name');
	        $table->float('price');
	        $table->text('description');
	        $table->text('images');
	        $table->integer('category_id');
	        $table->integer('brand_id');
	        $table->integer('coupon_id')->default(0);
	        $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
	        $table->increments('id');
	        $table->string('name');
	        $table->integer('parent_id')->default(0);
	        $table->timestamps();
        });

        Schema::create('brands', function (Blueprint $table) {
	        $table->increments('id');
	        $table->string('name');
	        $table->timestamps();
        });

        Schema::create('settings', function (Blueprint $table) {
        	$table->increments('id');
        	$table->string('key');
        	$table->string('value');
	        $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
	        $table->increments('id');
	        $table->integer('user_id')->default(0);
	        $table->string('status');
	        $table->string('payment_method');
	        $table->float('amount');
	        $table->string('name');
	        $table->string('phone');
	        $table->string('email');
	        $table->string('address');
	        $table->timestamps();
        });

        Schema::create('order_details', function (Blueprint $table) {
        	$table->increments('id');
        	$table->integer('order_id');
        	$table->integer('product_id');
        	$table->float('price');
        	$table->integer('quantity');
	        $table->timestamps();
        });

        Schema::create('contacts', function (Blueprint $table) {
        	$table->increments('id');
        	$table->string('name');
	        $table->string('email');
	        $table->text('content');
	        $table->timestamps();
        });

        Schema::create('subscribes', function (Blueprint $table) {
	        $table->increments('id');
	        $table->dateTime('start_time');
	        $table->dateTime('end_time');
	        $table->text('content');
	        $table->timestamps();
        });

        Schema::create('articles', function (Blueprint $table) {
	        $table->increments('id');
	        $table->string('title');
	        $table->text('content');
	        $table->boolean('status')->default(1);
	        $table->timestamps();
        });

        Schema::create('sliders', function (Blueprint $table) {
	        $table->increments('id');
	        $table->string('title');
	        $table->string('image');
	        $table->string('url')->nullable();
	        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
	    Schema::drop('categories');
	    Schema::drop('brands');
	    Schema::drop('settings');
	    Schema::drop('orders');
	    Schema::drop('order_details');
	    Schema::drop('contacts');
	    Schema::drop('subscribes');
	    Schema::drop('articles');
	    Schema::drop('sliders');
    }
}
