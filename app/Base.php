<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Base extends Model {

use SoftDeletes;

protected $table = 'base';


	protected $fillable = ['fecha', 'producto', 'base'];

	protected $dates = ['deleted_at'];

}