<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapeleriaVentaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('papeleria-ventas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->string('articulo');
			$table->smallInteger('catidad');
			$table->double('total',15,2);
			$table->double('ganancia',15,2);

			$table->integer('papeleria_id')->unsigned();
			$table->foreign('papeleria_id')->references('id')->on('papeleria');

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
		Schema::drop('papeleria-ventas');
	}

}
