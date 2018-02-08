<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staffs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('organizations_id');
			$table->integer('locations_id');
			$table->integer('departments_id');
			$table->integer('divisions_id')->nullable();
			$table->integer('sub_divisions_id')->nullable();
			$table->string('title', 100)->nullable();
			$table->string('first_name', 100);
			$table->string('last_name', 100);
			$table->string('middle_name', 100)->nullable();
			$table->string('name', 300)->nullable();
			$table->enum('gender', array('F','M','NA'))->nullable();
			$table->date('date_of_birth')->nullable();
			$table->string('email_address', 100)->nullable();
			$table->string('password')->nullable();
			$table->boolean('is_active')->nullable();
			$table->integer('designation_id')->nullable();
			$table->integer('staff_id')->nullable();
			$table->date('joining_date')->nullable();
			$table->boolean('is_holding_card')->nullable();
			$table->string('card_number', 50)->nullable();
			$table->string('photo', 100)->nullable();
			$table->text('introduction', 65535)->nullable();
			$table->boolean('is_auto_shift')->nullable()->default(0);
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
		Schema::drop('staffs');
	}

}
