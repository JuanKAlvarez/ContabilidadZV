<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEgreso extends Model {

use SoftDeletes;

protected $table = 'tipos-egresos';


	protected $fillable = ['egreso', 'descripcion', 'valor'];

	protected $dates = ['deleted_at'];

}