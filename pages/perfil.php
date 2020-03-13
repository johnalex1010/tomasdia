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
	require_once "../models/model.perfil.php";

	//CONTROLLERS
	require_once "../controllers/controller.perfil.php";

	//VISTAS
	require_once "../views/view.header.php";
	require_once "../views/view.perfil.php";
	require_once "../views/view.footer.php";
?>