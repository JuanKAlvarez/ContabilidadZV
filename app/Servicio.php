<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model {

use SoftDeletes;

protected $table = 'servicios';


	protected $fillable = ['servicio', 'precio', 'descripcion','valor'];

	protected $dates = ['deleted_at'];

}