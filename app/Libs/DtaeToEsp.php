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
			'01' => 'Enero',
			'02' => 'Febrero',
			'03' => 'Marzo',
			'04' => 'Abril',
			'05' => 'Mayo',
			'06' => 'Junio',
			'07' => 'Julio', 
			'08' => 'Agosto',
			'09' => 'Septiembre',
			'10' => 'Octubre',
			'11' => 'Noviembre',
			'12' => 'Diciembre'
			];

		return $fecha= "$dia de $meses[$mes] del $año";
		
	}
}