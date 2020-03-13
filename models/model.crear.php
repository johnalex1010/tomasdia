<?php
	//DATOS USUARIO
	function datosUsuario($conexion, $id_usuario){
		$consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM t_usuario WHERE id_usuario=:id_usuario");
		$consulta->execute(array(':id_usuario' => $id_usuario));
		$consulta = $consulta->fetch();
		$totalUsuario = $conexion->query("SELECT FOUND_ROWS() AS registro");
		$totalUsuario = $totalUsuario->fetch()['registro'];
		if ($totalUsuario == 1) {
			if ($consulta['activo'] == 1) {
				return $consulta;
			}else{
				session_destroy();
				header('Location:' . URL ."/login");
			}	
		}else{
			session_destroy();
			header('Location:' . URL ."/login");
		}
	}

	//SELECIONAR ULTIMA NOTICIA REGISTRADA POR EDICION
	function ultimaEdicion($conexion){
		$edicion = $conexion->prepare("SELECT * FROM t_tn ORDER BY edicion DESC LIMIT 1");
		$edicion->execute();
		$edicion = $edicion->fetch();
		return $edicion;
	}

	function edicion($conexion, $id_edicion){
		$edicion = $conexion->prepare("SELECT * FROM t_tn WHERE edicion=:id_edicion");
		$edicion->execute(array(':id_edicion' => $id_edicion));
		$edicion = $edicion->fetch();
		return $edicion;
	}

	//CREAR NOTICIA
	function crearNoticia($conexion,$noticia){
		print_r($noticia);
		$carpeta = "../public/images/noticias/";
		$destino = $carpeta.$noticia[5][0];
		$nuevoNombreImagen = "ED".$noticia[0].".".$noticia[5][3];

		if (file_exists($carpeta)) {
			if (@move_uploaded_file($noticia[5][1], $destino)) {
				rename($carpeta.$noticia[5][0],$carpeta.$nuevoNombreImagen);
			}
			if (file_exists($carpeta.$nuevoNombreImagen)) {
				$new_tn = $conexion->prepare("INSERT INTO t_tn (edicion, fecha, titulo, parrafo, link, imagen, id_usuario) VALUES (:edicion, :fecha, :titulo, :parrafo, :link, :imagen, :id_usuario)");
	            	$new_tn->execute(
	            		array(	
	            			':edicion' => $noticia[0],
	            			':fecha' => date('Y-m-d'),
	            			':titulo' => $noticia[2],
	            			':parrafo' => $noticia[3],
	            			':link' => $noticia[4],
	            			':imagen' => $nuevoNombreImagen,
	            			':id_usuario' => $noticia[1],
	            		)
	            	);
	            	unset($_POST);
	            	enviarNoticia($conexion, $noticia[0]);
			}
		}
	}

?>