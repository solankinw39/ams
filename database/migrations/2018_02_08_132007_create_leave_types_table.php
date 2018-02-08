<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeaveTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leave_types', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('name', 200);
			$table->char('short_code', 20)->nullable();
			$table->char('type', 20)->nullable();
			$table->boolean('is_carry_forword')->nullable();
			$table->integer('carry_forword_to')->nullable();
			$table->boolean('is_encash')->nullable();
			$table->date('encash_after')->nullable();
			$table->boolean('is_sandwich_rule')->nullable();
			$table->string('description', 200)->nullable();
			$table->boolean('is_required_document')->nullable();
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
		Schema::drop('leave_types');
	}

}
