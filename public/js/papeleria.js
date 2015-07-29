
$( document ).ready(function() {
  var precio = $( "#precio" );
  var valor = $( "#valor" );


  $( "#precio" ).keyup(function() {
    $( "#valor" ).val("");
    var vlrPrecio = parseInt(precio.val());
    calcularValor(vlrPrecio);


  });
});


function calcularValor(vlrPrecio){

  if (vlrPrecio) {

    i = vlrPrecio + (vlrPrecio * 0.45);
    i = (i/50);
    i = Math.ceil(i);
    i = (i*50);

    $( "#valor" ).val(i);

  } else {

    $( "#valor" ).val(0);

  }
  calcularGanancia();

}

function calcularGanancia(){
  var vlrPrecio = parseInt($( "#precio" ).val());
  var vlrValor = parseInt($( "#valor" ).val());

  if (vlrPrecio) {

    i = vlrValor - vlrPrecio ;


    $( "#ganancia" ).val(i);

  } else {

    $( "#ganancia" ).val(0);

  }

}
