<?php

namespace App\Http\Controllers\Venta;

use App\InternetVenta;
use App\Http\Requests\InternetVentaRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class InternetController extends Controller {


	public function index()
	{
		$registros = InternetVenta::orderBy('fecha','DESC')
										->orderBy('id','DESC')
										->paginate(10);
		return view('venta.internet', compact('registros'));
	}

	public function store(InternetVentaRequest $recuest)
	{
		$data = new InternetVenta();
		$data->fill($recuest->all());
		$data->save();
		Session::flash('message','El Registro Fue Ingresado Satisfactoriamente');
		return redirect()->back();
	}

	public function update($id, Request $recuest)
	{
		$data = InternetVenta::findOrFail($id);
		$data->fill($recuest->all());
		$data->save();
		Session::flash('message','El Registro Fue Modificado Satisfactoriamente');
		return redirect()->back();
	}

	public function destroy($id)
	{
		$data = InternetVenta::findOrFail($id);
		$data->delete();
		Session::flash('message','El Registro Fue Eliminado Satisfactoriamente');

		return redirect()->back();
	}

}
