<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnRoleToUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
{
    Schema::table('users', function($table)
    {
        $table->unsignedInteger('role_id');
		$table->foreign('role_id')->references('id')->on('role')->onDelete('cascade');
     });

}

public function down()
{
    Schema::table('users', function($table)
    {
       $table->dropColumn('role_id');
    });
}

}
