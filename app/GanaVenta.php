<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GanaVenta extends Model {


protected $table = 'gana-ventas';


	protected $fillable = [
							'fecha', 
							'liquidar', 
							'ganancia',
							'perdida', 
							'total_dia', 
							'nota',
							'user_id'
						   ];


    public function user()
    {
        return $this->hasMany('App\User');
    }

}
