<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImpresoraVenta extends Model {


protected $table = 'impresora-ventas';


	protected $fillable = ['fecha', 'valor', 'nota','user_id'];


    public function user()
    {
        return $this->hasMany('App\User');
    }

}
