var idM = 0;
$(function()
{
     //Configuracion del Autocomplete de servicios en modal editar
     $( ".artic" ).autocomplete({
          source: "../serviciosComplete",
          minLength: 1,
          select: function(event, ui) {

            var servicio = $('#servicio'+idM);
            var servicioId = $('#servicio_id'+idM);


            servicio.val(ui.item.value);
            servicio.attr('tital'+idM , ui.item.valor);
            servicioId.val(ui.item.id);

            calcularTG1();

      }
    });

     //Configuracion del Autocomplete de servicios
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

    //Detecta el Click en los enlaces del las listas de servicios
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

     //Detecta el Click en los enlaces del las listas de servicios
    $(".arti").bind("click", function() {
        console.log(idM);
        
        //variables a utilizar
        var serv = $(this);
        var idMs = serv.attr('idM');
        var servicio = $('#servicio'+idM);
        var total = $('#total'+idM);
        var cantidad = $('#cantidad'+idM).val();
        var nameServicio = serv.text();
        var valorServicio = serv.attr('valor');
        var servicioId = serv.attr('servicioId');

        //Asignamiento de valores en el DOM
        servicio.val(nameServicio);
        servicio.attr('valor'+idM, valorServicio);

        $('#servicio_id'+idM).val(servicioId);
        total.val(valorServicio*cantidad); // calcular el total

        //Operaciones a realizar
        calcularTG1();

    });
     

      function calcularTG1() {
        /*-------------------CalcularTotal-------------------*/
        //variables a utilizar
        var servicio = $('#servicio'+idM);
        var total = $('#total'+idM);
        var cant = $('#cantidad'+idM);
        var cantidad = parseInt(cant.val());
        var valor = parseInt(servicio.attr('valor'+idM));


        //Verificamos si los campos Valor y cantidad existen
        if (isNaN(valor)||isNaN(cantidad)) {
            //si no estan definidos el total va a ser cero
           total.val(0);
        } else{
            //si estan definidos el total se calcula normalmente
           total.val(cantidad*valor);
        }

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
        var servicio = $('#servicio'+id);
        var total = $('#total'+id);
        var cant = $('#cantidad'+id);
        var cantidad = parseInt(cant.val());
        var valor = parseInt(servicio.attr('valor'+id));


        //Verificamos si los campos Valor y cantidad existen
        if (isNaN(valor)||isNaN(cantidad)) {
            //si no estan definidos el total va a ser cero
           total.val(0);
        } else{
            //si estan definidos el total se calcula normalmente
           total.val(cantidad*valor);
        }


    }






