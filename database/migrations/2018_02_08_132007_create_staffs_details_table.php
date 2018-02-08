<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffsDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staffs_details', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('staffs_id');
			$table->enum('marital_status', array('S','M','NA'))->nullable();
			$table->text('permanent_address', 65535)->nullable();
			$table->text('current_address', 65535)->nullable();
			$table->string('phone_number', 20)->nullable();
			$table->string('mobile_number', 20)->nullable();
			$table->string('emergency_contact', 20)->nullable();
			$table->string('personal_email_address', 100)->nullable();
			$table->string('father_husband_name', 100)->nullable();
			$table->string('pan_number', 50)->nullable();
			$table->string('driving_license_number', 50)->nullable();
			$table->string('aadhar_number', 50)->nullable();
			$table->string('passport_number', 50)->nullable();
			$table->string('health_insurance_number', 50)->nullable();
			$table->string('other_insurance_number', 50)->nullable();
			$table->string('signature', 100)->nullable();
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
		Schema::drop('staffs_details');
	}

}
