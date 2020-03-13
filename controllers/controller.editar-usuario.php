<?php

	if (isset($_POST['submit-user'])) {
		$error = array();
		$nuevoUsuario = array();

		//Validar nombres
		$nombres = trim($_POST['nombres']);
		if (!empty($nombres)) {
			$nombres = ucwords($nombres);
			array_push($nuevoUsuario, $nombres);
		}else{
			$error[1] = 'Campo obligatorio';
		}

		// Validar email
		$email = trim($_POST['email']);
		if (!empty($email)) {
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				array_push($nuevoUsuario, $email);
			}else{
				$error[2] = 'Campo email no es valido';
			}
		}else{
			$error[2] = 'Campo obligatorio';
		}

		//Validar permiso
		$permiso = trim($_POST['permiso']);
		if (!empty($permiso)) {
			if (is_numeric($permiso)) {
				array_push($nuevoUsuario, $permiso);
			}else{
				$error[3] = 'Campo obligatorio';
			}
			
		}else{
			$error[3] = 'Campo obligatorio';
		}

		//Validar usuario
		$usuario = trim($_POST['usuario']);
		$seleccionarUsuario = seleccionarUsuario($conexion,$usuario);		
		if (!empty($usuario)) {
			if ($usuario == $seleccionarUsuario['usuario']) {
				array_push($nuevoUsuario, $usuario);
			}else{
				array_push($nuevoUsuario, $usuario);
			}
			
		}else{
			$error[4] = 'Campo obligatorio';
		}

		//Validar password
		if (empty($_POST['password']) || empty($_POST['repassword'])) {
			$error[5] = "Los campos son obligatorios.";
			$error[6] = "Los campos son obligatorios.";
		}elseif($_POST['password'] == $_POST['repassword']){
			$hash =  password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost'=>10]);
			array_push($nuevoUsuario, $hash);
		}else{
			$error[5] = "Los campos NO coinciden.";
			$error[6] = "Los campos NO coinciden.";
		}

		//Validar activo
		$activo = trim($_POST['activoa']);
		if (isset($activo)) {
			if (is_numeric($activo)) {
				array_push($nuevoUsuario, $activo);
			}else{
				$error[7] = 'Campo obligatorio';
			}			
		}else{
			$error[7] = 'Campo obligatorio';
		}

		if (!$error) {
			editUsuario($conexion,$nuevoUsuario);
			// print_r($nuevoUsuario);
		}

	}

	

?>