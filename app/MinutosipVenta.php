<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MinutosipVenta extends Model {


protected $table = 'minutosip-ventas';


	protected $fillable = ['fecha', 'tipo', 'ganancia','total-dia', 'nota', 'user_id'];


    public function user()
    {
        return $this->hasMany('App\User');
    }

}
