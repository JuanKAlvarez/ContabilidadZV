<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Egreso extends Model {

use SoftDeletes;

protected $table = 'egresos';


	protected $fillable = ['fecha', 'egreso', 'valor','tipo-egrso_id', 'user_id'];

	protected $dates = ['deleted_at'];

	public function egreso()
    {
        return $this->hasMany('App\TipoEgreso');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }

}