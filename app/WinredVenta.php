<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class WinredVenta extends Model {

use SoftDeletes;

protected $table = 'winred-ventas';


	protected $fillable = ['fecha', 'ganancia', 'total-dia','nota', 'user_id';

	protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->hasMany('App\User');
    }

}