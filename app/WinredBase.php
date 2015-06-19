<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class WinredBase extends Model {

use SoftDeletes;

protected $table = 'winred-base';


	protected $fillable = ['fecha', 'base'];

	protected $dates = ['deleted_at'];

}