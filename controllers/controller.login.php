<?php

	if (isset($_POST['submit'])) {
		$error ="";
		//Validar usuario y contraseña
		if (empty($_POST['usuario']) || empty($_POST['password'])) {
			$error = "El usuario y contraseña son obligatorios.";
		}else{
			$usuario = $_POST['usuario'];
			$password = $_POST['password'];
			$error = validarUsuario($conexion, $usuario, $password);
		}
	}

?>