<?php namespace App\Http\Controllers;

use App\Servicio;
use App\Papeleria;
use App\Http\Requests;
use Illuminate\Http\Request;

class AutocompleteController extends Controller {


	public function __construct()
	{
		$this->middleware('auth');
	}

	public function papeleria()// Autocomplete para la vista de Venta/Papeleria
	{
		$term = \Input::get('term');//Recoleccion del termino buscado
        $results = array(); //Variable que almacenara los datos
        $queries = \DB::table('papeleria')  //Busqueda en la base de datos segun 3 campos
                    ->where('articulo', 'LIKE', '%'.$term.'%')
                    ->orWhere('marca', 'LIKE', '%'.$term.'%')
                    ->orWhere('descripcion', 'LIKE', '%'.$term.'%')
                    ->take(10)//obtimene maximo 10 resultados
                    ->get(); 

        foreach ($queries as $query) // pasamos los datos a un Array
        {
            $results[] = [
                        'id' => $query->id, 
                        'value' => $query->articulo.' '.$query->marca.' '.$query->descripcion,
                        'valor' => $query->valor,
                        'gananciaUnit' => $query->ganancia
                         ];
        }

        return \Response::json($results); // se debuelve los datos en notacion tipo json
	}

    public function servicios()// Autocomplete para la vista de Venta/Servicios
    {
        $term = \Input::get('term');//Recoleccion del termino buscado
        $results = array(); //Variable que almacenara los datos
        $queries = \DB::table('servicios')  //Busqueda en la base de datos segun 3 campos
                    ->where('servicio', 'LIKE', '%'.$term.'%')
                    ->take(10)//obtimene maximo 10 resultados
                    ->get(); 

        foreach ($queries as $query) // pasamos los datos a un Array
        {
            $results[] = [
                            'id' => $query->id, 
                            'value' => $query->servicio,
                            'valor' => $query->valor
                         ];
        }

        return \Response::json($results); // se debuelve los datos en notacion tipo json
    }


}
