<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffsProfessionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staffs_professions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('organizations_id');
			$table->integer('locations_id');
			$table->integer('departments_id');
			$table->integer('divisions_id')->nullable();
			$table->integer('sub_divisions_id')->nullable();
			$table->integer('staffs_id');
			$table->string('first_experiance_company', 100)->nullable();
			$table->integer('first_experiance_years')->nullable();
			$table->string('first_experiance_address')->nullable();
			$table->string('last_experiance_company', 100)->nullable();
			$table->integer('last_experiance_years')->nullable();
			$table->string('last_experiance_address')->nullable();
			$table->integer('total_experiance')->nullable();
			$table->integer('relevance_experiance')->nullable();
			$table->string('technologies_worked')->nullable();
			$table->string('role_played')->nullable();
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
		Schema::drop('staffs_professions');
	}

}
