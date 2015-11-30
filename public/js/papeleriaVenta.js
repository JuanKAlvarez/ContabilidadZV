var idM = 0;
$(function()
{
     //Configuracion del Autocomplete de articulos en modal editar
     $( ".artic" ).autocomplete({
          source: "../papeleriaComplete",
          minLength: 1,
          select: function(event, ui) {

            var articulo = $('#articulo'+idM);
            var papeleriaId = $('#papeleria_id'+idM);
            var ganancia = $('#ganancia'+idM);


            articulo.val(ui.item.value);
            articulo.attr('valor'+idM , ui.item.valor);
            articulo.attr('gananciaUnit'+idM , ui.item.gananciaUnit);
            papeleriaId.val(ui.item.id);

            calcularTG1();

      }
    });

     //Configuracion del Autocomplete de articulos
     $( "#articulo" ).autocomplete({
      source: "../papeleriaComplete",
      minLength: 1,
      select: function(event, ui) {
        $('#articulo').val(ui.item.value);
        $('#articulo').attr('valor' , ui.item.valor);
        $('#articulo').attr('gananciaUnit' , ui.item.gananciaUnit);
        $('#papeleria_id').val(ui.item.id);

        calcularTotal();
        calcularGanancia();
      }
    });

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
        var gananciaUnit = art.attr('gananciaUnit');
        console.log(gananciaUnit);
        var papeleriaId = art.attr('papeleriaId');

        //Asignamiento de valores en el DOM
        articulo.val(nameArticulo);
        articulo.attr('valor', valorArticulo);
        articulo.attr('gananciaUnit' , gananciaUnit);
        $('#papeleria_id').val(papeleriaId);

        //Operaciones a realizar
        calcularTotal();
        calcularGanancia();

    });

    //calcula el precio dtotal de los articulos y guarda la ganancia
    function calcularTotal(){
        
        //variables a utilizar
        var articulo = $('#articulo');
        var cantidad = parseInt($('#cantidad').val());
        var valor = parseInt(articulo.attr('valor'));

        //Verificamos si los campos Valor y cantidad existen
        if (isNaN(valor)||isNaN(cantidad)) {
            //si no estan definidos el total va a ser cero
           $('#total').val(0);
        } else{
            //si estan definidos el total se calcula normalmente
           $('#total').val(cantidad*valor);
        }

    }

    function calcularGanancia(){
        
        //variables a utilizar
        var articulo = $('#articulo');
        var cantidad = parseInt($('#cantidad').val());
        var ganancia = parseInt(articulo.attr('gananciaUnit'));
        var total  = cantidad * ganancia ;
        //Acciones
        
        $('#ganancia').val(total);

    }

    //Cambiar el total despues de que el usuario alla modificado la cantidad
    //actualizar despues de levantar cualquie tecla
    $('#cantidad').on('keyup',function () {
        calcularTotal();
        calcularGanancia();
    });
    //actualizar despues de cambiar dinamicamente por controles en el DOM
    $('#cantidad').change(function () {
        calcularTotal();
        calcularGanancia();
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
        var ganancia = $('#ganancia'+idM);
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






