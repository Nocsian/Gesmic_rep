<?php
	include "../gesmic.php";
	session_start();
		
		if ($_SESSION["TIPO_USUARIO"] == 1){

			echo "administrador/__/adm_usuarios/__/adm_reuniones/__/adm_minutas/__/Adm. de Usuarios/__/Adm. de Reuniones/__/Adm. de Minutas";	
			
		}
		
		if ($_SESSION["TIPO_USUARIO"] == 2){
			
			echo "coordinador/__/coord_reuniones/__/coord_minutas/__/coord_notificaciones/__/Gest. de Reuniones/__/Gest. de Minutas/__/Gest. de Notificaciones";	
		
		}
		
		if ($_SESSION['TIPO_USUARIO'] == 3){
			
			echo "participante/__/part_reuniones/__/part_minutas/__/part_notificaciones/__/Gest. de Reuniones/__/Gest. de Minutas/__/Gest. de Notificaciones";	
		
		}
		

?>