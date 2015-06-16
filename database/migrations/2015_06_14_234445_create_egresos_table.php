<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEgresosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('egresos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->string('egreso');
			$table->double('valor',15,2);

			$table->integer('tipo-egrso_id')->unsigned();
			$table->foreign('tipo-egrso_id')->references('id')->on('tipo-egrso');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');	

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
		Schema::drop('egresos');
	}

}
