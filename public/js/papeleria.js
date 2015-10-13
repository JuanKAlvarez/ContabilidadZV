
$( document ).ready(function() {
 
  var precio = $( "#precio" );
  var valor = $( "#valor" );

  $( "#precio" ).keyup(function() {
    $( "#valor" ).val("");
    var vlrPrecio = parseInt(precio.val());
    calcularValor(vlrPrecio);

  });

});

//------------------------------//------------------------------//

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

function modal(id){
  
  var precio;
  var valor;

  precio = parseInt($('#precio'+id).val());
  valor = $('#valor'+id);

  valor.val(0);
  
//Se calcula el valor
 
  if (precio) {
    i = precio + (precio * 0.45);
    i = (i/50);
    i = Math.ceil(i);
    i = (i*50);
    valor.val(i);
  } else {
    valor.val(0);
  }

//Se calcula la gaancia

  var precio = parseInt($('#precio'+id).val());
  var valor = parseInt($('#valor'+id).val());
  var ganancia = $('#ganancia'+id);

  if (precio) {
    i = valor - precio ;
    ganancia.val(i);

  } else {
    ganancia.val(0);
  }




}




