<?php
	//SELECIONAR ULTIMA NOTICIA REGISTRADA POR EDICION
	function noticias($conexion){
		$noticias = $conexion->prepare("SELECT * FROM t_tn ORDER BY edicion DESC LIMIT 1, 4");
		$noticias->execute();
		$noticias = $noticias->fetchAll();
		return $noticias;
	}
	function ediciones($conexion){
		$ediciones = $conexion->prepare("SELECT * FROM t_tn WHERE edicion <> (SELECT MAX(edicion) FROM t_tn) ORDER BY edicion DESC;");
		$ediciones->execute();
		$ediciones = $ediciones->fetchAll();
		return $ediciones;
	}
?>