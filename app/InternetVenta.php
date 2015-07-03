<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InternetVenta extends Model {


protected $table = 'internet-ventas';


	protected $fillable = ['fecha', 'valor', 'nota','user_id'];


    public function user()
    {
        return $this->hasMany('App\User');
    }

}
