<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarouselsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carousels', function (Blueprint $table) {
			$table->increments('id');
			$table->tinyInteger('is_link');
			$table->string('file');
			$table->mediumText('description')->nullable();
			$table->tinyInteger('status')->unsigned()->default(1);
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
		Schema::drop('carousels');
	}
}