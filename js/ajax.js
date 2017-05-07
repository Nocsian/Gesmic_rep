$( document ).ready(function() {
		$.ajax({
		url: "php/menu/menu.php",
		type: "POST",
		crossDomain: true,
		cache: false,
		data:{ 
			accion:"primera_Carga"
		},
		success: function(data){
				var data = data.split("/__/");
				//carga la primera opcion de menu por defecto
				menu(data[0],data[1]);
				
				//Funcionamiento de Menu
				$("#tlt-1").append(data[4]);
				$('#li01').click(function() {menu(data[0],data[1]);});
				
				$("#tlt-2").append(data[5]);
				$('#li02').click(function() {menu(data[0],data[2]);}); 
				
				$("#tlt-3").append(data[6]);
				$('#li03').click(function() {menu(data[0],data[3]);}); 
				
			}	
		});
		
		$('#btn-logout').click(function() {salir();}); 	
});

function menu(modo,opc){
	var opc = opc;
	var modo = modo;
	
	jQuery("#page-wrapper").empty();

		$.ajax({
		url: "php/"+modo+"/"+opc+".php",
		type: "POST",
		crossDomain: true,
		cache: false,
		data:{ 
			accion:"primera_Carga"
		},
		success: function(data){
				//carga el contenido del php en el div page-wrapper
				jQuery("#page-wrapper").append(data);
				
			}	
		});
}

function salir(){

		$.ajax({
		url: "php/logout.php",
		type: "POST",
		crossDomain: true,
		cache: false,
		data:{ 
			accion:"logout"
		},
		success: function(data){
			//Regreso a login		
			window.location.href="login.html";		
				
			}	
		});
}

