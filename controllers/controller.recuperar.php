<?php

	if (isset($_POST['submit'])) {
		$error ="";
		//Validar usuario y contraseña
		$email = trim($_POST['email']);
		if (!empty($email) ){
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$error = buscarEmail($conexion, $_POST['email']);
			}else{
				$error = "El correo no es valido.";
			}
		}else{
			$error = "El campo es obligatorio.";
		}
	}

?>