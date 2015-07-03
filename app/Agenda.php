<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model {



protected $table = 'agenda';


	protected $fillable = ['nombre', 'telefono-1', 'telefono-2','celular-1', 'celular-2', 'nota'];




}
