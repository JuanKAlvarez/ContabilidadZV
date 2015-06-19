<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Papeleria extends Model {

use SoftDeletes;

protected $table = 'papeleria';


	protected $fillable = ['articulo', 'marca', 'descripcion','precio', 'valor','ganancia'];

	protected $dates = ['deleted_at'];

}
