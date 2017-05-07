<?php
	include "gesmic.php";
	
	if($_POST['accion'] == 'comprueba_usuario'){
			$usuario_form	=$_POST['usuario'];
			$pw_form		=$_POST['pw'];
			$tipo_usuario	=0;
			//este validador debera llenar un switch desde BD para identificador de tipo de usuario
			
			if ($usuario_form=='admin'){
				$tipo_usuario	=1;
			}
			if ($usuario_form=='coordinador'){
				$tipo_usuario	=2;
			}
			if ($usuario_form=='participante'){
				$tipo_usuario	=3;
			}
			session_start();
			$_SESSION["TIPO_USUARIO"]=$tipo_usuario;
			$_SESSION["NOMBRE"]='n/a';
			$_SESSION["APELLIDO"]='n/a';
			$_SESSION["PAIS"]='n/a';
			
		
		
	}

?>