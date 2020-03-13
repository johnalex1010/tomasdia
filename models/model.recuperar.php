<?php

	function buscarEmail($conexion, $email){
		$consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS email FROM t_usuario WHERE email=:email");
		$consulta->execute(array(':email' => $email));
		$consulta = $consulta->fetch();
		$totalEmail = $conexion->query("SELECT FOUND_ROWS() AS registro");
		$totalEmail = $totalEmail->fetch()['registro'];

		if ($totalEmail == 1) {
			$repassword = generarCodigo(7);
			$password =  password_hash($repassword, PASSWORD_DEFAULT, ['cost'=>10]);
			$cambio = cambiarRePassword($conexion, $email, $password);

			if (isset($cambio)) {
				seleccionarUsuario($conexion, $email, $repassword);
			}else{
				$error = "Error al cambiar la contraseña. Si persiste el error comuniquese con el administrador.";
				return $error;
			}
		}else{
			$error = "El email no está registrado en el sistema.";
			return $error;
		}
		
	}
	
	function generarCodigo($longitud) {
		$key = '';
		$pattern = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$max = strlen($pattern)-1;
		for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
		return $key;
	}

	function cambiarRePassword($conexion, $email, $password){
		$cambio = $conexion->prepare("UPDATE t_usuario SET password=:password WHERE email=:email");
		$cambio->execute(array(':email' => $email, ':password' => $password));
		$cambio = $cambio->fetch();
		return $cambio;
	}

	function seleccionarUsuario($conexion, $email, $repassword){
		$select = $conexion->prepare("SELECT usuario FROM t_usuario WHERE email=:email");
		$select->execute(array(':email' => $email));
		$select = $select->fetch();
		enviarPassword($conexion, $email, $select['usuario'], $repassword);
	}



?>