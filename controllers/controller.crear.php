<?php

	if (isset($_POST['submit-tn'])) {
		$error = array();
		$noticia = array();

		//Edición
		$edicion = ultimaEdicion($conexion);
		$edicion = $edicion['edicion'] + 1;
		array_push($noticia, $edicion);

		//id_usuario
		$id_usuario = $_SESSION['id_usuario'];
		array_push($noticia, $id_usuario);

		//Validar titulo
		$titulo = trim($_POST['titulo']);
		if (!empty($titulo)) {
			$titulo = strtoupper($titulo);
			array_push($noticia, $titulo);
		}else{
			$error[1] = 'Campo obligatorio';
		}

		// Validar parrafo
		$parrafo = trim($_POST['parrafo']);
		if (!empty($parrafo)) {
			$parrafo = ucfirst($parrafo);
			array_push($noticia, $parrafo);
		}else{
			$error[2] = 'Campo obligatorio';
		}

		// valirdar link
		$link = trim($_POST['link']);
		if (!empty($link)) {
			if (!filter_var($link, FILTER_VALIDATE_URL) === false) {
		        $link = $link;
		        array_push($noticia, $link);
		    } else {
		        $error[3] = "El campo no es una URL valida";
		    }
		}else{
			$error[3] = "Campo obligatorio";
		}

		// validar imagen
	    if (isset($_FILES['imagen']['name'])) {
	    	if (($_FILES['imagen']['type'] == "image/jpeg") || ($_FILES['imagen']['type'] == "image/jpg") || ($_FILES['imagen']['type'] == "image/png")) {

	    		$extension = explode(".", $_FILES['imagen']['name']);

	    		$imagen = array(
		    		$_FILES['imagen']['name'],
		    		$_FILES['imagen']['tmp_name'],
		    		$extension[0],
		    		$extension[1]
	    		);
	    		array_push($noticia, $imagen);		    	
		    }else{
		    	$error[4] = "La imagen no es valida";
		    }
	    }else{
	    	$error[4] = "Campo obligatorio";
	    }
	}

	if (!$error) {
		crearNoticia($conexion,$noticia);
	}

?>