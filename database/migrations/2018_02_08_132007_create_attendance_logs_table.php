<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttendanceLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attendance_logs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('organizations_id');
			$table->integer('locations_id');
			$table->integer('departments_id');
			$table->integer('staffs_id');
			$table->date('recorddate');
			$table->time('recordtime');
			$table->integer('device_id')->nullable();
			$table->boolean('status')->nullable();
			$table->string('lattitude', 100)->nullable();
			$table->string('longitude', 100)->nullable();
			$table->string('remark', 200)->nullable();
			$table->integer('shifts_id')->nullable();
			$table->string('from_ip', 20)->nullable();
			$table->boolean('cron_status')->nullable()->default(1);
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
		Schema::drop('attendance_logs');
	}

}
