<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffsAssessmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staffs_assessments', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('organizations_id');
			$table->integer('locations_id');
			$table->integer('departments_id');
			$table->integer('divisions_id')->nullable();
			$table->integer('sub_divisions_id')->nullable();
			$table->integer('staffs_id');
			$table->string('position_offered', 100)->nullable();
			$table->string('personality', 100)->nullable();
			$table->string('communication', 100)->nullable();
			$table->integer('staff_education_id')->nullable();
			$table->string('strength')->nullable();
			$table->string('weekness')->nullable();
			$table->string('reason')->nullable();
			$table->string('first_interviwer')->nullable();
			$table->text('first_remark', 65535)->nullable();
			$table->date('first_inteview_date')->nullable();
			$table->string('second_interviwer')->nullable();
			$table->text('second_remark', 65535)->nullable();
			$table->date('second_inteview_date')->nullable();
			$table->text('final_remark', 65535)->nullable();
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
		Schema::drop('staffs_assessments');
	}

}
