<?php
	session_start();
	require_once "../config/config.php";

	if (!isset($_SESSION['id_usuario'])) {
		header('Location:' . URL ."/login");
	}

	//CONFIG
	require_once '../config/config.php';
	require_once '../config/config.database.php';

	//CONTROLLERS

	//MODELS
	require_once "../models/model.functions.php";
	require_once "../models/model.crear.php";
	require_once "../models/model.mis-noticias.php";

	//VISTAS
	require_once "../views/view.header.php";
	require_once "../views/view.mis-noticias.php";
	require_once "../views/view.footer.php";
?>