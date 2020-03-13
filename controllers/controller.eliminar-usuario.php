<?php

	if (isset($_POST['submit-delete'])) {
		$error ="";
		//Validar usuario y contraseña
		if (isset($_POST['usuario'])) {
			eliminarUsuario($conexion, $_POST['usuario']);
		}else{
			echo URL."/cerrar-session";
		}
	}

?>