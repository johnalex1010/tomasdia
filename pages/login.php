<?php

	session_start();
	require_once '../config/config.php';

	if (isset($_SESSION['id_usuario'])) {
		header('Location:' . URL ."/crear");
	}

	//CONFIG	
	require_once "../config/config.database.php";

	//MODELS
	require_once "../models/model.login.php";

	//CONTROLLERS
	require_once "../controllers/controller.login.php";

	//VISTAS
	require_once "../views/view.header.php";
	require_once "../views/view.login.php";
	require_once "../views/view.footer.php";
?>