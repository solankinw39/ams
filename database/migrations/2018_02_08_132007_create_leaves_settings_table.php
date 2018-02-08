<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeavesSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leaves_settings', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('field_name', 100);
			$table->integer('field_status');
			$table->string('field_value', 100);
			$table->integer('created_by')->nullable();
			$table->dateTime('created_on')->nullable();
			$table->integer('updated_by')->nullable();
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
		Schema::drop('leaves_settings');
	}

}
