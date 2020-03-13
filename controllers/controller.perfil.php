<?php

	if (isset($_POST['submit'])) {
		$error ="";
		//Validar cambio de contraseña
		if (empty($_POST['password']) || empty($_POST['repassword'])) {
			$error = "Los campos son obligatorios.";
		}elseif($_POST['password'] == $_POST['repassword']){
			$hash =  password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost'=>10]);
			$mensaje = cambiarPassword($conexion, $_SESSION['id_usuario'], $hash);
		}else{
			$error = "Los campos NO coinciden.";
		}
	}

?>