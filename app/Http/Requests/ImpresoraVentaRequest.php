<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ImpresoraVentaRequest extends Request {

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
			'fecha'		=>	'required |date | unique:impresora-ventas,fecha',
			'valor'		=>	'required | numeric',
			'nota'		=>	'',
			'user_id'	=>	'required'
		];
	}

}
