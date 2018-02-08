<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDevicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('devices', function(Blueprint $table)
		{
			$table->integer('id')->nullable();
			$table->integer('database_type')->nullable();
			$table->string('ip_address', 300)->nullable();
			$table->integer('port_number')->nullable();
			$table->string('db_user', 300)->nullable();
			$table->string('db_pwd', 300)->nullable();
			$table->string('filename', 300)->nullable();
			$table->string('file_path', 750)->nullable();
			$table->string('dns', 300)->nullable();
			$table->dateTime('created_on')->nullable();
			$table->integer('created_by')->nullable();
			$table->dateTime('updated_on')->nullable();
			$table->integer('updated_by')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('devices');
	}

}
