<?php 

namespace App\Http\Controllers\Venta;

use App\GanaVenta;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class GanaController extends Controller {


	public function index()
	{

		$registros = GanaVenta::orderBy('fecha','DESC')
										->orderBy('id','DESC')
										->paginate(10);
		return view('venta.gana', compact('registros'));	
	}

	public function store(Request $recuest)
	{
		$data = new GanaVenta();
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
		//
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}

}
