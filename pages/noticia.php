<?php
	session_start();
	require_once "../config/config.php";

	if (!isset($_SESSION['id_usuario'])) {
		header('Location:' . URL ."/login");
	}
	//CONFIG
	require_once "../config/config.database.php";

	//MODELS
	require_once "../models/model.functions.php";
	require_once "../models/model.editar.php";	
	// require_once "../models/model.enviarNoticia.php";

	//CONTROLLERS
	//require_once "../controllers/controller.editar.php";

	//VISTAS
	require_once "../views/view.header.php";
	require_once "../views/view.noticia.php";
	require_once "../views/view.footer.php";
?>