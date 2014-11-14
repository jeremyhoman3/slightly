<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title', 150);
            $table->longText('description');
            $table->integer('price');
            $table->string('image-one', 60)->unique();
            $table->string('image-two', 60)->nullable();
            $table->string('image-three', 60)->nullable();
            $table->boolean('has-been-sold');
            $table->string('seller-email');
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
		Schema::drop('items');
	}

}
