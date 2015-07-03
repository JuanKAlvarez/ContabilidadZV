<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {


	public function up()
	{
		Schema::create('users', function (Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('user')->unique();
			$table->string('email')->unique();
			$table->string('type');
			$table->string('password', 60);
			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}

}
