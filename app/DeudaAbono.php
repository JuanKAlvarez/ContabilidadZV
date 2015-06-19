<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeudaAbono extends Model {

use SoftDeletes;

protected $table = 'deudas-abonos';


	protected $fillable = ['fecha', 'nombre-deuda', 'deuda-tipo_id','user_id'];

	protected $dates = ['deleted_at'];

	public function deudaTipo()
    {
        return $this->hasMany('App\DeudaTipo');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }

}