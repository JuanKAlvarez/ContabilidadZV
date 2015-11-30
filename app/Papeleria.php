<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Papeleria extends Model {


protected $table = 'papeleria';

 use SoftDeletes;
 
	protected $fillable = 
				[
					'articulo',
					'marca', 
					'descripcion',
					'precio', 
					'valor',
					'ganancia'
				];
				
	protected $dates = ['deleted_at'];
	

}
