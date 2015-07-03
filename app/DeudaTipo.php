<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeudaTipo extends Model {



protected $table = 'deudas-tipos';


	protected $fillable = ['nombre-deuda', 'para', 'prestamista','descripcion', 'valor-a-pagar','valor-pagado'];



}
