<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShiftsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shifts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 100);
			$table->integer('organizations_id');
			$table->integer('locations_id');
			$table->integer('shift_types_id');
			$table->time('start_time');
			$table->time('end_time');
			$table->time('working_hours')->nullable();
			$table->boolean('is_late_allowed')->nullable();
			$table->string('description', 200)->nullable();
			$table->boolean('is_active')->nullable();
			$table->boolean('is_night_shift')->nullable();
			$table->boolean('is_weekoff')->nullable();
			$table->boolean('weekoff_type')->nullable();
			$table->integer('weekoff_days')->nullable();
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
		Schema::drop('shifts');
	}

}
