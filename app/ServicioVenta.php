<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioVenta extends Model {


protected $table = 'servicios-ventas';


	protected $fillable = ['id', 'fecha', 'servicio','catidad', 'total', 'servicio_id','user_id'];


	public function servicio()
    {
        return $this->hasMany('App\Servicio');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }

}
