<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffsEducationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staffs_educations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('staffs_id');
			$table->string('highest_qualification', 50)->nullable();
			$table->string('course_name', 100)->nullable();
			$table->string('university', 100)->nullable();
			$table->string('collage', 100)->nullable();
			$table->string('collage_address', 250)->nullable();
			$table->text('remark', 65535)->nullable();
			$table->decimal('percentage', 11)->nullable();
			$table->string('attachment', 100)->nullable();
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
		Schema::drop('staffs_educations');
	}

}
