<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arqueo extends Model {

use SoftDeletes;

protected $table = 'arqueo';


	protected $fillable = ['fecha', 'arqueo', 'user_id'];

	protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->hasMany('App\User');
    }

}