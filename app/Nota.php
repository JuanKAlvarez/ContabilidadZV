<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model {

use SoftDeletes;

protected $table = 'notas';


	protected $fillable = ['fecha', 'nota'];

	protected $dates = ['deleted_at'];



}