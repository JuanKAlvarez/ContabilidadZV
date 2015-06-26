<?php 
namespace App\Libs;
/**
* 
*/
class DateToEsp 
{
	
	function __construct()
	{
		# code...
	}

	public function DiaMesAno($date)
	{
		$fecha = explode("-", $date);
		dd($fecha);
	}
}