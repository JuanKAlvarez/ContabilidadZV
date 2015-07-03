<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeudaAbono extends Model {


protected $table = 'deudas-abonos';


	protected $fillable = ['fecha', 'nombre-deuda', 'deuda-tipo_id','user_id'];


	public function deudaTipo()
    {
        return $this->hasMany('App\DeudaTipo');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }

}
