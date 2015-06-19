<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeudaTipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deudas-tipos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre-deuda');
			$table->string('para'); // Familia o Sala de Internet (Zona Virtual)
			$table->string('prestamista');
			$table->string('descripcion')->nullable();
			$table->double('valor-a-pagar',15,2);
			$table->double('valor-pagado',15,2)->default(0);



			
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
		Schema::drop('deudas-tipos');
	}

}
