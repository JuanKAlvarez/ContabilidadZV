<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEgreso extends Model {

use SoftDeletes;

protected $table = 'tipo-egreso';


	protected $fillable = ['egreso', 'descripcion', 'valor'];

	protected $dates = ['deleted_at'];

}