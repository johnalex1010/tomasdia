<?php
	//SELECIONAR ULTIMA NOTICIA REGISTRADA POR EDICION
	function usuarioAEliminar($conexion, $usuario){
		$userDelete = $conexion->prepare("SELECT * FROM t_usuario WHERE usuario=:usuario");
		$userDelete->execute(array(":usuario" => $usuario));
		$userDelete = $userDelete->fetch();
		return $userDelete;
	}

	function eliminarUsuario($conexion, $usuario){
		$eliminiar = $conexion->prepare("DELETE FROM t_usuario WHERE usuario=:usuario");
		$eliminiar->execute(array(":usuario" => $usuario));
		$eliminiar = $eliminiar->fetch();
		header('Location:' . URL ."/usuarios");
		return $eliminiar;
		
	}
?>