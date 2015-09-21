<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Papeleria extends Model {


protected $table = 'papeleria';


	protected $fillable = ['articulo', 'marca', 'descripcion','precio', 'valor','ganancia'];
	

}
