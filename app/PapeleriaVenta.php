<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PapeleriaVenta extends Model {


protected $table = 'papeleria-ventas';


	protected $fillable = ['fecha', 'articulo', 'catidad','total', 'ganancia', 'papeleria_id','user_id'];


	public function articuloPapeleria()
    {
        return $this->hasMany('App\Papeleria');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }

}
