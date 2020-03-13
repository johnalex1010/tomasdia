<?php
	session_start();
	require_once "../config/config.php";

	if (!isset($_SESSION['id_usuario'])) {
		header('Location:' . URL ."/login");
	}
	//CONFIG
	require_once "../config/config.database.php";

	//MODELS
	require_once "../models/model.editar-usuario.php";
	require_once "../models/model.seleccionarUsuarios.php";

	//CONTROLLERS
	require_once "../controllers/controller.editar-usuario.php";

	//VISTAS
	require_once "../views/view.header.php";
	require_once "../views/view.editar-usuario.php";
	require_once "../views/view.footer.php";
?>