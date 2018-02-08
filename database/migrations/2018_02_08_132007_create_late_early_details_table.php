<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLateEarlyDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('late_early_details', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('shifts_id');
			$table->time('late_in')->nullable();
			$table->time('late_out')->nullable();
			$table->time('early_in')->nullable();
			$table->time('early_out')->nullable();
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
		Schema::drop('late_early_details');
	}

}
