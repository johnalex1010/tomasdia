<?php

	function seleccionarUsuario($conexion, $usuario){
		$consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM t_usuario WHERE usuario=:usuario");
		$consulta->execute(array(':usuario' => $usuario));
		$consulta = $consulta->fetch();
		return $consulta;
	}

?>