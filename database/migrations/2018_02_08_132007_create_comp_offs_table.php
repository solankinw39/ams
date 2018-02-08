<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompOffsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comp_offs', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('organizations_id');
			$table->integer('locations_id');
			$table->integer('departments_id');
			$table->integer('divisions_id')->nullable();
			$table->integer('sub_divisions_id')->nullable();
			$table->integer('staffs_id');
			$table->date('start_date');
			$table->date('end_date');
			$table->date('worked_on_date');
			$table->string('description', 200)->nullable();
			$table->boolean('status')->nullable();
			$table->integer('approved_by')->nullable();
			$table->dateTime('approved_on')->nullable();
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
		Schema::drop('comp_offs');
	}

}
