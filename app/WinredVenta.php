<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WinredVenta extends Model {


protected $table = 'winred-ventas';


	protected $fillable = ['fecha', 'ganancia', 'total-dia','nota', 'user_id';


    public function user()
    {
        return $this->hasMany('App\User');
    }

}
