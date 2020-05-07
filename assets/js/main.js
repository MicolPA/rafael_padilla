$("#cedula").mask('000-0000000-0');
$("#celular").mask('000-000-0000');

//$("#movimientosname-cedula").bind('keyup', function (e) {
$("#clave1").bind('keyup', function(){
	checkClave();
});

$("#clave2").bind('keyup', function(){
	checkClave();
});


function checkClave(){

	clave1 = $("#clave1").val();
	clave2 = $("#clave2").val();

	console.log(clave1 + " - " + clave2);
	if (clave1 != clave2) {
		$("#pass_alert").show();
		$(".btn_submit").hide();
	}else{
		$("#pass_alert").hide();
		$(".btn_submit").show();
	}
}

function eliminarUsuario(id){
	swal({
	  title: "¿Está seguro?",
	  text: "¿Desea Eliminar a este coordinador?",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	})
	.then((willDelete) => {
	  if (willDelete) {
	  	url = '/auth/eliminarUsuario?id='+id;
	    window.location.replace(url);
	  } else {
	    
	  }
	});
}

function eliminarSub(id){
	swal({
	  title: "¿Está seguro?",
	  text: "¿Desea Eliminar a este Sub coordinador?",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	})
	.then((willDelete) => {
	  if (willDelete) {
	  	url = '/registrar/eliminarSub?id='+id;
	    window.location.replace(url);
	  } else {
	    
	  }
	});
}

$(function() { //shorthand document.ready function
    $('#formulario').on('submit', function(e) { 
    	console.log('Hola');
    	if (screen.width > 1080) {
            $("body").css("cursor", "progress");
            $(".btn_submit").hide();
            $(".div_cargando").show();
        }else{
            $(".btn_submit").hide();
			$(".div_loader").show();
        }
		
    });
});

$("#btn_submit").on('click', function(){
	$(this).hide();
	$(".div_loader").show();

})

$(document).ready(function() {
    $('#table').DataTable( {
        "lengthMenu": [[20, 25, 50, -1], [20, 25, 50, "All"]],
        "searching":     true
    } );
} );