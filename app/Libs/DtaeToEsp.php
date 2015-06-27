<?php 
namespace App\Libs;
/**
* 
*/
class DateToEsp 
{
	

	public static function DiaMesAno($date)
	{
		$fecha = explode("-", $date);
		$año= $fecha[0]; 
		$mes= $fecha[1]; 
		$dia= $fecha[2]; 

		$meses = [
			'enero',
			'febrero',
			'marzo',
			'abril',
			'mayo',
			'junio',
			'julio', 
			'agosto',
			'septiembre',
			'octubre',
			'noviembre',
			'diciembre'
			];

		$fecha= "$dia de $mes del $año";
		dd($fecha);
	}
}