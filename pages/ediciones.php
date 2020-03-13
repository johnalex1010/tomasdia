<?php
	session_start();

	//CONFIG
	require_once '../config/config.php';
	require_once '../config/config.database.php';

	//CONTROLLERS

	//MODELS
	require_once "../models/model.functions.php";
	require_once "../models/model.ediciones.php";
	require_once "../models/model.crear.php";

	//VISTAS
	require_once "../views/view.header.php";
	require_once "../views/view.ediciones.php";
	require_once "../views/view.footer.php";
?>