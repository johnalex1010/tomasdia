<?php
	function usuarios($conexion){
		$usuarios = $conexion->prepare("SELECT U.*, P.permiso FROM t_usuario AS U, t_permiso AS P WHERE U.id_permiso=P.id_permiso");
		$usuarios->execute();
		$usuarios = $usuarios->fetchAll();
		return $usuarios;
	}
?>