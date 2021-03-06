<?php 

namespace App\Http\Controllers\Venta;

use App\ServicioVenta;
use App\Servicio;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ServiciosController extends Controller {

	public function index()
	{
		
		$servicios = Servicio::orderBy('servicio','ASC')->get();

		$registros = ServicioVenta::orderBy('fecha','DESC')
										->orderBy('id','DESC')
										->paginate(5);

		return view('venta.servicios', compact('registros','servicios'));


	}

	public function create()
	{
		//
	}

	public function store(Request $recuest)
	{
		
		$data = new ServicioVenta();
		$data->fill($recuest->all());
		$data->user_id = \Auth::user()->id;

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
		//
	}


	public function update($id, Request $recuest)
	{
		$data = ServicioVenta::findOrFail($id);
		$data->fill($recuest->all());
		$data->user_id = \Auth::user()->id;
		$data->save();
		Session::flash('message','El Registro Fue Modificado Satisfactoriamente');
		return redirect()->back();
	}


	public function destroy($id)
	{
		$data = ServicioVenta::findOrFail($id);
		$data->delete();
		Session::flash('message','El Registro Fue Eliminado Satisfactoriamente');

		return redirect()->back();
	}

}
