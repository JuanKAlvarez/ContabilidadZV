
$( document ).ready(function() {
//Variables Globales
  var precio = $( "#precio" );
  var valor = $( "#valor" );

//Se calcula el valor y la ganancia si se cambia el campo precio
  $( "#precio" ).keyup(function() {
    $( "#valor" ).val("");
    var vlrPrecio = parseInt(precio.val());
    calcularValor(vlrPrecio);

  });

//Se calcula la ganancia si se cambia el campo valor
  $( "#valor" ).keyup(function() {
    calcularGanancia();
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
  
//Se calcula el valor para el modal
  valorModal(id);

//Se calcula la gaancia
  gananciaModal(id);


}

function valorModal (id) {
  var precio = parseInt($('#precio'+id).val());
  var valor = $('#valor'+id);

  if (precio) {
    i = precio + (precio * 0.45);
    i = (i/50);
    i = Math.ceil(i);
    i = (i*50);
    valor.val(i);
  } else {
    valor.val(0);
  }
}

function gananciaModal (id) {
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




