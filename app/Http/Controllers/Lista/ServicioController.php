<?php

namespace App\Http\Controllers\Lista;

use App\Servicio;
use App\Http\Requests\PapeleriaRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ServicioController extends Controller {


	public function index()
	{

		$registros =Servicio::orderBy('servicio','asc')->paginate(5);
		return view('lista.servicios', compact('registros'));
	}

	public function store(Request $recuest)
	{
		$data = new Servicio();
		$data->fill($recuest->all());
		$data->save();
		Session::flash('message','El Registro Fue Ingresado Satisfactoriamente');
		return redirect()->back();
	}

	public function update($id, Request $recuest)
	{
		$data = Servicio::findOrFail($id);
		$data->fill($recuest->all());
		$data->save();
		Session::flash('message','El Registro Fue Modificado Satisfactoriamente');
		return redirect()->back();
	}

	public function destroy($id)
	{
		$data = Servicio::findOrFail($id);
		$data->delete();
		Session::flash('message','El Registro Fue Eliminado Satisfactoriamente');

		return redirect()->back();
	}

	
}
