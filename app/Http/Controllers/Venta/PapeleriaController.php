<?php 

namespace App\Http\Controllers\Venta;

use App\PapeleriaVenta;
use App\Papeleria;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PapeleriaVentaRequest;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PapeleriaController extends Controller {


	public function index()
	{
		
		$articulos = Papeleria::orderBy('articulo','ASC')->get();

		$registros = PapeleriaVenta::orderBy('fecha','DESC')
										->orderBy('id','DESC')
										->paginate(5);

		return view('venta.papeleria', compact('registros','articulos'));


	}

	public function create()
	{
		//
	}

	public function store(PapeleriaVentaRequest $recuest)
	{
		
		$data = new PapeleriaVenta();
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
		$data = PapeleriaVenta::findOrFail($id);
		$data->fill($recuest->all());
		$data->user_id = \Auth::user()->id;
		$data->save();
		Session::flash('message','El Registro Fue Modificado Satisfactoriamente');
		return redirect()->back();
	}


	public function destroy($id)
	{
		$data = PapeleriaVenta::findOrFail($id);
		$data->delete();
		Session::flash('message','El Registro Fue Eliminado Satisfactoriamente');

		return redirect()->back();
	}

}
