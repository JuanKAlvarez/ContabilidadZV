<?php

namespace App\Http\Controllers\Venta;

use App\ImpresoraVenta;
use App\Http\Requests\ImpresoraVentaRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ImpresoraController extends Controller {

	public function index()
	{
		$registros = ImpresoraVenta::orderBy('fecha','DESC')
																			->orderBy('id','DESC')
																			->paginate(10);
		return view('venta.impresora', compact('registros'));
	}

	public function store(ImpresoraVentaRequest $recuest)
	{
		$data = new ImpresoraVenta();
		$data->fill($recuest->all());
		$data->save();
		Session::flash('message','El Registro Fue Ingresado Satisfactoriamente');
		return redirect()->back();
	}

	public function update($id, Request $recuest)
	{
		$data = ImpresoraVenta::findOrFail($id);
		$data->fill($recuest->all());
		$data->save();
		Session::flash('message','El Registro Fue Modificado Satisfactoriamente');
		return redirect()->back();
	}

	public function destroy($id)
	{
		$data = ImpresoraVenta::findOrFail($id);
		$data->delete();
		Session::flash('message','El Registro Fue Eliminado Satisfactoriamente');

		return redirect()->back();
	}

}
