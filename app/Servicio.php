<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicio extends Model {


protected $table = 'servicios';

use SoftDeletes;

	protected $fillable = 
				[
					'servicio',
					'valor'
				];
	protected $dates = ['deleted_at'];


}
