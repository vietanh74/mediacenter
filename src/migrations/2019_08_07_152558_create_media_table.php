<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media', function(Blueprint $table)
		{
			$table->char('id', 32)->primary();
			$table->string('mime_type', 32)->nullable();
			$table->string('original_name')->nullable();
			$table->integer('size')->nullable();
			$table->char('updated_by', 32)->nullable();
			$table->char('created_by', 32)->nullable();
			$table->string('width', 225)->nullable();
			$table->string('height', 225)->nullable();
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
		Schema::drop('media');
	}

}
