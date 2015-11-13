var idM = 0;
$(function()
{
     //Configuracion del Autocomplete de articulos en modal editar
     $( ".artic" ).autocomplete({
          source: "../serviciosComplete",
          minLength: 1,
          select: function(event, ui) {

            var servicio = $('#servicio'+idM);
            var servicioId = $('#servicio_id'+idM);


            servicio.val(ui.item.value);
            servicio.attr('valor'+idM , ui.item.valor);
            servicioId.val(ui.item.id);

            calcularTG1();

      }
    });

     //Configuracion del Autocomplete de articulos
     $( "#servicio" ).autocomplete({
      source: "../serviciosComplete",
      minLength: 1,
      select: function(event, ui) {

        var servicio = $('#servicio');
        var servicioId = $('#servicio_id');

        servicio.val(ui.item.value);
        console.log(ui.item.value);
        servicio.attr('valor' , ui.item.valor);
        servicioId.val(ui.item.id);

        calcularTotal();
      }
    });

    // Se asigna por default 1 como cantidad inicial  vendida
    $('#cantidad').val(1);
    // Se asigna por default 0 como Total Vendido  
    $('#total').val(0);

    //Detecta el Click en los enlaces del las listas de articulos
    $(".art").bind("click", function() {
        
        //variables a utilizar
        var serv = $(this);
        var servicio = $('#servicio');
        var nameServicio = serv.text();
        var valorServicio = serv.attr('valor');
        var servicioId = serv.attr('servicioId');

        //Asignamiento de valores en el DOM
        servicio.val(nameServicio);
        servicio.attr('valor', valorServicio);
        $('#servicio_id').val(servicioId);

        //Operaciones a realizar
        calcularTotal();

    });

    //calcula el precio total 
    function calcularTotal(){
        
        //variables a utilizar
        var servicio = $('#servicio');
        var cantidad = parseInt($('#cantidad').val());
        var valor = parseInt(servicio.attr('valor'));

        //Verificamos si los campos Valor y cantidad existen
        if (isNaN(valor)||isNaN(cantidad)) {
            //si no estan definidos el total va a ser cero
           $('#total').val(0);
        } else{
            //si estan definidos el total se calcula normalmente
           $('#total').val(cantidad*valor);
        }

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


    /*
     *  ---------------------- Modal Editar Logica ----------------------
     */

     //Detecta el Click en los enlaces del las listas de articulos
    $(".arti").bind("click", function() {
        
        //variables a utilizar
        var art = $(this);
        var idM = art.attr('idM');
        var articulo = $('#articulo'+idM);
        var total = $('#total'+idM);
        var cantidad = $('#cantidad'+idM).val();
        var nameArticulo = art.text();
        var valorArticulo = art.attr('valor');
        var gananciaUnit = art.attr('gananciaUnit');
        var papeleriaId = art.attr('papeleriaId');

        //Asignamiento de valores en el DOM
        articulo.val(nameArticulo);
        articulo.attr('valor'+idM, valorArticulo);
        articulo.attr('gananciaUnit'+idM , gananciaUnit);
        $('#papeleria_id'+idM).val(papeleriaId);
        total.val(valorArticulo*cantidad); // calcular el total
        ganancia.val(gananciaUnit*cantidad);// calcular ganancia
        //Operaciones a realizar
        calcularTG1();

    });
     

      function calcularTG1() {
        /*-------------------CalcularTotal-------------------*/
        //variables a utilizar
        var articulo = $('#articulo'+idM);
        var total = $('#total'+idM);
        var cant = $('#cantidad'+idM);
        var cantidad = parseInt(cant.val());
        var valor = parseInt(articulo.attr('valor'+idM));
        var gananciaUnit = parseInt(articulo.attr('gananciaUnit'+idM ));
        var ganancia  = 0;

        //Verificamos si los campos Valor y cantidad existen
        if (isNaN(valor)||isNaN(cantidad)) {
            //si no estan definidos el total va a ser cero
           total.val(0);
        } else{
            //si estan definidos el total se calcula normalmente
           total.val(cantidad*valor);
        }

        /*-------------------CalcularGanancia-------------------*/

        ganancia  = cantidad * gananciaUnit ;
        $('#ganancia'+idM).val(ganancia);

    }



});
    /*
     *  ---------------------- Modal Editar Logica ----------------------
     */
    function idModal(id) {
        idM = id;
    }

    function calcularTG(id) {
        /*-------------------CalcularTotal-------------------*/
        //variables a utilizar
        var articulo = $('#articulo'+id);
        var total = $('#total'+id);
        var cant = $('#cantidad'+id);
        var cantidad = parseInt(cant.val());
        var valor = parseInt(articulo.attr('valor'+id));
        var gananciaUnit = parseInt(articulo.attr('gananciaUnit'+id ));
        var ganancia  = 0;
        console.log('cantidad '+cantidad);
        console.log('valor '+valor);
        console.log('gananciaUnit '+gananciaUnit);

        //Verificamos si los campos Valor y cantidad existen
        if (isNaN(valor)||isNaN(cantidad)) {
            //si no estan definidos el total va a ser cero
           total.val(0);
        } else{
            //si estan definidos el total se calcula normalmente
           total.val(cantidad*valor);
        }

        /*-------------------CalcularGanancia-------------------*/

        ganancia  = cantidad * gananciaUnit ;
        $('#ganancia'+id).val(ganancia);


    }






