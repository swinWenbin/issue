<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssueUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issue_user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('issue_id');
			$table->foreign('issue_id')->references('id')->on('issues')->onDelete('cascade');
			$table->unsignedInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('issue_user');
	}

}
