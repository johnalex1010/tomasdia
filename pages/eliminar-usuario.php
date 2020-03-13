<?php
	session_start();
	require_once "../config/config.php";

	if (!isset($_SESSION['id_usuario'])) {
		header('Location:' . URL ."/login");
	}
	//CONFIG
	require_once "../config/config.database.php";

	//MODELS
	require_once "../models/model.eliminar-usuario.php";	

	//CONTROLLERS
	require_once "../controllers/controller.eliminar-usuario.php";

	//VISTAS
	require_once "../views/view.header.php";
	require_once "../views/view.eliminar-usuario.php";
	require_once "../views/view.footer.php";
?>