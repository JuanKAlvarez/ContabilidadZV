<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGanaVentasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gana-ventas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->double('liquidar',15,2);
			$table->double('ganancia',15,2);
			$table->double('perdida',15,2)->default(0);
			$table->double('total_dia',15,2);
			$table->string('nota')->nullable();

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
		Schema::drop('gana-ventas');
	}

}
