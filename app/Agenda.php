<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model {

use SoftDeletes;

protected $table = 'agenda';


	protected $fillable = ['nombre', 'telefono-1', 'telefono-2','celular-1', 'celular-2', 'nota'];

	protected $dates = ['deleted_at'];


}