<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class GanaVenta extends Model {

use SoftDeletes;

protected $table = 'gana-ventas';


	protected $fillable = ['fecha', 'liquidar', 'ganancia','perdida', 'total-dia', 'nota','user_id'];

	protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->hasMany('App\User');
    }

}