<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeviciosVentaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sevicios-venta', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->string('servicio');
			$table->smallInteger('catidad');
			$table->double('total',15,2);

			$table->integer('servicio_id')->unsigned();
			$table->foreign('servicio_id')->references('id')->on('servicios');

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
		Schema::drop('sevicios-venta');
	}

}
