
$( document ).ready(function() {
    
//  Menu Vertical, Colocar la clase Active a los items de menu  
  activeMenuV();
 
// Configurar el datepick
  configdDatepick();

    AutoClosingAlert(".alert", 5000);

});


//Funciones

function AutoClosingAlert(selector, delay) {
   var alert = $(selector).alert();
   window.setTimeout(function() {alert.alert('close')}, delay);
}


function activeMenuV(){

  var pathArray = window.location.pathname.split( '/' );
    pathArray = '.'+ pathArray[4];
    $(pathArray).addClass("active");

}

function configdDatepick(){

    // $.datepick.regionalOptions['es'] = {
    //   monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
    //   'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
    //   monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
    //   'Jul','Ago','Sep','Oct','Nov','Dic'],
    //   dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
    //   dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
    //   dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
    //   dateFormat: 'dd/mm/yyyy', firstDay: 1,
    //   renderer: $.datepick.defaultRenderer,
    //   prevText: '&#x3c;Ant', prevStatus: '',
    //   prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: '',
    //   nextText: 'Sig&#x3e;', nextStatus: '',
    //   nextJumpText: '&#x3e;&#x3e;', nextJumpStatus: '',
    //   currentText: 'Hoy', currentStatus: '',
    //   todayText: 'Hoy', todayStatus: '',
    //   clearText: 'Limpiar', clearStatus: '',
    //   closeText: 'Cerrar', closeStatus: '',
    //   yearStatus: '', monthStatus: '',
    //   weekText: 'Sm', weekStatus: '',
    //   dayStatus: 'D, M d', defaultStatus: '',
    //   isRTL: false
    // };
    
    // $.datepick.setDefaults($.datepick.regionalOptions['es']);

    // $( ".datepicker" ).datepick({
    //       dateFormat: 'yyyy-mm-dd'
    //   });

    //   $id = $('#pag').val();
    // $($id).addClass('btn-material-blue-800');

}
