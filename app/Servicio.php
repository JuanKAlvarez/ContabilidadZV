<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model {


protected $table = 'servicios';


	protected $fillable = ['servicio', 'precio', 'descripcion','valor'];


}
