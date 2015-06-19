<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class MinutosipVenta extends Model {

use SoftDeletes;

protected $table = 'minutosip-ventas';


	protected $fillable = ['fecha', 'tipo', 'ganancia','total-dia', 'nota', 'user_id'];

	protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->hasMany('App\User');
    }

}