<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 100);
			$table->integer('created_by')->nullable()->default(1);
			$table->dateTime('created_on')->nullable();
			$table->integer('updated_by')->nullable()->default(1);
			$table->dateTime('updated_on')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('countries');
	}

}
