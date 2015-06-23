<?php 

namespace App\Http\Controllers\Venta;

use App\InternetVenta;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class InternetController extends Controller {


	public function index()
	{
		$registros = InternetVenta::orderBy('fecha', 'DESC')->orderBy('id', 'DESC')->get();
		return view('venta.internet', compact('registros'));
	}


	public function create()
	{
		//
	}

	public function store(Request $recuest)
	{
		$data = new InternetVenta();
		$data->fill($recuest->all());
		$data->save();
		Session::flash('message','El Registro Fue Ingresado Satisfactoriamente');
		return redirect()->back();
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{

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
