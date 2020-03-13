<?php
	function ediciones($conexion, $id_usuario){
		$ediciones = $conexion->prepare("SELECT * FROM t_tn WHERE id_usuario=:id_usuario ORDER BY edicion DESC");
		$ediciones->execute(
			array(
				":id_usuario" => $id_usuario
			)
		);
		$ediciones = $ediciones->fetchAll();
		return $ediciones;
	}
?>