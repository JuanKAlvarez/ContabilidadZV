<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arqueo extends Model {


protected $table = 'arqueo';


	protected $fillable = ['fecha', 'arqueo', 'user_id'];


    public function user()
    {
        return $this->hasMany('App\User');
    }

}
