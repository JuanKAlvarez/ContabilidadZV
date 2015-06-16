<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinutosipVentasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('minutosip-ventas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->string('tipo'); // venta o Recarga
			$table->double('ganancia',15,2);
			$table->double('total-dia',15,2);
			$table->string('nota')->nullable();

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
		Schema::drop('minutosip-ventas');
	}

}
