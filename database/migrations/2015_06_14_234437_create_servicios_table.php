<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servicios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('servicio');
			$table->double('precio',15,2);
			$table->string('descripcion')->nullable();
			$table->double('valor',15,2);
			$table->double('ganancia',15,2);

			
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servicios');
	}

}
