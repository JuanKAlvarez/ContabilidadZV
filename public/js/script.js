$.material.init();

$( '.toll-bar' ).ready(function() {
    $id = $('#pag').val();
	$($id).addClass('btn-material-blue-800');
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()


    $( ".datepicker" ).datepicker();


/*  if ($.browser.mozilla)
    {
        if ($('.datepicker')[0].type != 'date') $('.datepicker').datepicker();
        $(function () {
            $(".datepicker").datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "1900:2015",
                dateFormat: "yy-mm-dd",
                defaultDate: '1900-01-01'
            });
        });
    }*/


})

