<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issues', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('issue_title');
			$table->string('issue_desc');
			$table->integer('status_id');
			$table->Integer('priority_id');
			//$table->unsignedInteger('status_id');
			//$table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
			//$table->unsignedInteger('priority_id');
			//$table->foreign('priority_id')->references('id')->on('priority')->onDelete('cascade');
			$table->integer('related_project')->unsigned();
            $table->foreign('related_project')->references('id')->on('projects');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('issues');
	}

}
