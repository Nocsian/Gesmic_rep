$( document ).ready(function() {			
				//asigna opcion de menu correspondiente al tipo de usuario (administrador/coordinador/participante)
				$('#btn-in').click(function() {valida();});
});

function valida(){
		var usuario		=	$("#usuario").val();
		var pw			=	$("#pw").val();
		
		$.ajax({
		url: "php/valida.php",
		type: "POST",
		crossDomain: true,
		cache: false,
		data:{ 
			accion:"comprueba_usuario",
			usuario:usuario,
			pw:pw
		},
		success: function(data){
				
				window.location.href="index.html";		
				
			 }	
		});
return false;				
}
