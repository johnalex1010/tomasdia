<?php

	function validarUsuario($conexion, $usuario, $password){
		$consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM t_usuario WHERE usuario=:usuario");
		$consulta->execute(array(':usuario' => $usuario));
		$consulta = $consulta->fetch();
		$totalUsuario = $conexion->query("SELECT FOUND_ROWS() AS registro");
		$totalUsuario = $totalUsuario->fetch()['registro'];

		if ($totalUsuario == 1) {
			if ($consulta['activo'] == 1) {
				if (password_verify($password, $consulta['password'])) {
					$_SESSION['id_usuario'] = $consulta['id_usuario'];
					header('Location:' . URL ."/crear");
				}else{
					$error = "Usuario y contraseña incorrectos";
				}
			}else{
				$error = "Usuario y contraseña incorrectos";
			}	
		}else{
			$error = "Usuario y contraseña incorrectos";
		}

		return $error;
	}

?>