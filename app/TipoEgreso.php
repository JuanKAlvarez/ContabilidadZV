<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEgreso extends Model {


protected $table = 'tipos-egresos';


	protected $fillable = ['egreso', 'descripcion', 'valor'];


}
