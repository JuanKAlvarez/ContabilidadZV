  // $(function() {
  //     $( "#articulo" ).autocomplete({
  //     source: function (request, response) {
  //         $.ajax({
  //               url:'papeleria',
  //               dataType:'json',
  //               data:(q:request.term),
  //               success:function(data) {
  //                   response(data);
  //               }
  //         });
  //     },
  //     minLength:1,
  //     select:function(event, ui) {
  //         // body...
  //     }
  //   });
  // });
    // Se asigna por default 1 como cantidad inicial  vendida
    $('#cantidad').val(1); 
    // Se asigna por default 0 como Total Vendido  
    $('#total').val(0);

    //Detecta el Click en los enlaces del las listas de articulos
    $(".art").bind("click", function() {
        
        //variables a utilizar
        var art = $(this);
        var articulo = $('#articulo');
        var nameArticulo = art.text();
        var valorArticulo = art.attr('valor');

        //Asignamiento de valores en el DOM
        articulo.val(nameArticulo);
        articulo.attr('valor', valorArticulo);

        //Operaciones a realizar
        calcularTotal();

    });

    //calcula el precio dtotal de los articulos y guarda la ganancia
    function calcularTotal(){
        
        //variables a utilizar
        var articulo = $('#articulo');
        var cantidad = parseInt($('#cantidad').val());
        var valor = parseInt( articulo.attr('valor'));

        //Verificamos si los campos Valor y cantidad existen
        if (isNaN(valor)||isNaN(cantidad)) {
            //si no estan definidos el total va a ser cero
           $('#total').val(0); 
        } else{
            //si estan definidos el total se calcula normalmente
           $('#total').val(cantidad*valor);
        };

    }

    //Cambiar el total despues de que el usuario alla modificado la cantidad
    //actualizar despues de levantar cualquie tecla
    $('#cantidad').on('keyup',function () {
        calcularTotal();
    });
    //actualizar despues de cambiar dinamicamente por controles en el DOM
    $('#cantidad').change(function () {
        calcularTotal();
    });








