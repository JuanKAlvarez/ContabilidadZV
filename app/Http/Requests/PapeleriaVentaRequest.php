<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PapeleriaVentaRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'fecha'		=>	'required |date',
			'articulo'		=>	'required',
			'cantidad'		=>	'required | numeric',
			'total'		=>	'required | numeric',
			'ganancia'		=>	'required | numeric',
			'papeleria_id'		=>	'required'
		];
	}

}
