<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeudasAbonosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deudas-abonos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->string('nombre-deuda');
			$table->double('abono',15,2);

			$table->integer('deuda-tipo_id')->unsigned();
			$table->foreign('deuda-tipo_id')->references('id')->on('deudas-tipos');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

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
		Schema::drop('deudas-abonos');
	}

}
