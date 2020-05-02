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
		$(".btn-register").hide();
	}else{
		$("#pass_alert").hide();
		$(".btn-register").show();
	}
}