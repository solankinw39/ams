<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttendanceTimecardTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attendance_timecard', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('organizations_id');
			$table->integer('locations_id');
			$table->integer('departments_id');
			$table->integer('divisions_id')->nullable();
			$table->integer('sub_divisions_id')->nullable();
			$table->integer('shifts_id')->nullable();
			$table->integer('devices_id')->nullable();
			$table->integer('staffs_id');
			$table->date('recorddate');
			$table->integer('logcount')->nullable();
			$table->time('first_log')->nullable();
			$table->time('second_log')->nullable();
			$table->time('third_log')->nullable();
			$table->time('fourth_log')->nullable();
			$table->time('fifth_log')->nullable();
			$table->time('sixth_log')->nullable();
			$table->time('seventh_log')->nullable();
			$table->time('eighth_log')->nullable();
			$table->time('expected_in_time')->nullable();
			$table->time('expected_out_time')->nullable();
			$table->time('expected_in_office')->nullable();
			$table->time('actual_in_office')->nullable();
			$table->time('over_time')->nullable();
			$table->boolean('is_holiday')->nullable();
			$table->boolean('is_leave')->nullable();
			$table->integer('leave_type_id')->nullable();
			$table->float('leave_duration', 4)->nullable();
			$table->boolean('is_leave_approved')->nullable();
			$table->boolean('is_leave_unpaid_approved')->nullable();
			$table->boolean('leave_session')->nullable();
			$table->boolean('is_absent')->nullable();
			$table->boolean('is_present')->nullable();
			$table->boolean('is_weekoff')->nullable();
			$table->boolean('is_tour')->nullable();
			$table->boolean('is_wfh')->nullable();
			$table->boolean('is_compoff')->nullable();
			$table->boolean('cron_status')->nullable();
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
		Schema::drop('attendance_timecard');
	}

}
