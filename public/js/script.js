$.material.init();

$( '.toll-bar' ).ready(function() {
    $id = $('#pag').val();
	$($id).addClass('btn-material-blue-800');
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
