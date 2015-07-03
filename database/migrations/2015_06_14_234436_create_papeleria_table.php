<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapeleriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('papeleria', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('articulo');
			$table->string('marca');
			$table->string('descripcion')->nullable();
			$table->double('precio',15,2);
			$table->double('valor',15,2);
			$table->double('ganancia',15,2);

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
		Schema::drop('papeleria');
	}

}
