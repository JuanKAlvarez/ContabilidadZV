<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeudaTipo extends Model {

use SoftDeletes;

protected $table = 'deuda-tipo';


	protected $fillable = ['nombre-deuda', 'para', 'prestamista','descripcion', 'valor-a-pagar','valor-pagado'];

	protected $dates = ['deleted_at'];

}