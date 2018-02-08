<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAllowedLeavesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('allowed_leaves', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('organizations_id');
			$table->integer('locations_id');
			$table->integer('departments_id');
			$table->integer('divisions_id')->nullable();
			$table->integer('sub_divisions_id')->nullable();
			$table->integer('staffs_id');
			$table->integer('leave_types_id');
			$table->integer('value');
			$table->date('start_date');
			$table->date('end_date');
			$table->string('description', 150)->nullable();
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
		Schema::drop('allowed_leaves');
	}

}
