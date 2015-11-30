$(function () {

	var liquidar = $('#liquidar');
	var ganancia = $('#ganancia');
	var perdida = $('#perdida');
	var totalDia= $('#total_dia');

	liquidar.keyup(function () {
		calcularTotal ();
	});
	ganancia.keyup(function () {
		calcularTotal ();
	});
	perdida.keyup(function () {
		calcularTotal ();
	});





function calcularTotal () {
	
	//si el campo liquidar , ganancia o perdida esta en blanco se le asigna cero
	if (liquidar.val() == "") {
		liquidar.val(0);
	}
	if (ganancia.val() == "") {
		ganancia.val(0);
	}
	if (perdida.val() == "") {
		perdida.val(0);
	}

	liquidarVal =parseInt(liquidar.val());
	gananciaVal =parseInt(ganancia.val());
	perdidaVal =parseInt(perdida.val());

	sum = liquidarVal + gananciaVal;
	total = sum - perdidaVal;

	totalDia.val(total);


}



	console.log(liquidar);
	console.log(ganancia);
	console.log(perdida.val());
	console.log(totalDia);




	


});