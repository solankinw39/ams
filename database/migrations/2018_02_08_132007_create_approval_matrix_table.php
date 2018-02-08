<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApprovalMatrixTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('approval_matrix', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('staffs_id');
			$table->string('approval', 50)->nullable();
			$table->string('approved', 50)->nullable();
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
		Schema::drop('approval_matrix');
	}

}
