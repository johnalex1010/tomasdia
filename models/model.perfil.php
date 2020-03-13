<?php
	function perfil($conexion, $id_usuario){

		$perfil = $conexion->prepare("SELECT U.*, P.permiso FROM t_usuario AS U, t_permiso AS P WHERE U.id_permiso=P.id_permiso AND id_usuario=:id_usuario;");
		$perfil->execute(array(':id_usuario' => $id_usuario));
		$perfil = $perfil->fetch();
		$totalPerfil = $conexion->query("SELECT FOUND_ROWS() AS registro");
		$totalPerfil = $totalPerfil->fetch()['registro'];

		if ($totalPerfil == 1) {
			if ($perfil['activo'] == 1) {
				return $perfil;
			}else{
				$error = "Usuario y contraseña incorrectos";
			}	
		}else{
			$error = "Usuario y contraseña incorrectos";
		}
	}

	function cambiarPassword($conexion, $id_usuario, $password){
		$upPassword = $conexion->prepare("UPDATE t_usuario SET password=:password WHERE id_usuario=:id_usuario");
		$upPassword->execute(
			array(
				'id_usuario' => $id_usuario,
				'password' => $password
			)
		);

		return true;
	}
?>