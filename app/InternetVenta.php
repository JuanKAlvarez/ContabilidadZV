<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternetVenta extends Model {

use SoftDeletes;

protected $table = 'internet-ventas';


	protected $fillable = ['fecha', 'total-dia', 'nota','user_id'];

	protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->hasMany('App\User');
    }

}