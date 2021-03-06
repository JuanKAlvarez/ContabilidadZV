<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoEgrsoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipos-egresos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('egreso');
			$table->string('descripcion')->nullable();
			$table->double('valor',15,2)->nullable();

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
		Schema::drop('tipos-egresos');
	}

}
