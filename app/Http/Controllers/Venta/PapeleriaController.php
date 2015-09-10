<?php 

namespace App\Http\Controllers\Venta;

use App\PapeleriaVenta;
use App\Papeleria;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PapeleriaController extends Controller {


	public function index()
	{
		$articulos = Papeleria::orderBy('fecha','DESC')
										->orderBy('id','DESC')
										->paginate(5);
		$registros = PapeleriaVenta::orderBy('fecha','DESC')
										->orderBy('id','DESC')
										->paginate(5);

		return view('venta.papeleria', compact('registros'));

	}

	public function create()
	{
		//
	}

	public function store()
	{
		//
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
