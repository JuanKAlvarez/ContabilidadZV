<?php

namespace App\Http\Controllers\Lista;

use App\Papeleria;
use App\Http\Requests\PapeleriaRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PapeleriaController extends Controller {


	public function index()
	{
		$registros = Papeleria::orderBy('articulo','asc')
									->orderBy('marca','asc')
									->paginate(5);
		return view('lista.papeleria', compact('registros'));
	}

	public function store(PapeleriaRequest $recuest)
	{
		$data = new Papeleria();
		$data->fill($recuest->all());
		$data->save();
		Session::flash('message','El Registro Fue Ingresado Satisfactoriamente');
		return redirect()->back();
	}

	public function update($id, Request $recuest)
	{
		$data = Papeleria::findOrFail($id);
		$data->fill($recuest->all());
		$data->save();
		Session::flash('message','El Registro Fue Modificado Satisfactoriamente');
		return redirect()->back();
	}

	public function destroy($id)
	{
		$data = Papeleria::findOrFail($id);
		$data->delete();
		Session::flash('message','El Registro Fue Eliminado Satisfactoriamente');

		return redirect()->back();
	}

}
