<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeavesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leaves', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('organizations_id');
			$table->integer('locations_id');
			$table->integer('departments_id');
			$table->integer('divisions_id')->nullable();
			$table->integer('sub_divisions_id')->nullable();
			$table->integer('staffs_id');
			$table->string('subject', 200);
			$table->date('start_date');
			$table->date('end_date');
			$table->integer('leave_types_id');
			$table->float('duration', 10, 0)->nullable();
			$table->boolean('priority')->nullable();
			$table->string('description', 200)->nullable();
			$table->boolean('status')->nullable();
			$table->boolean('is_half_day')->nullable();
			$table->boolean('first_second_half_day')->nullable();
			$table->integer('approved_by')->nullable();
			$table->string('approvar_remark', 200)->nullable();
			$table->boolean('cron_status')->nullable();
			$table->string('document', 100)->nullable();
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
		Schema::drop('leaves');
	}

}
