<?php
/* Conexión a la base de datos para todo el core */
$host = constant('HOST');
$db_name = constant('DB');
$user = constant('USER');
$password = constant('PASSWORD');
$charset = constant('CHARSET');

try{
	$conexion = new PDO('mysql:host='.$host.';dbname='.$db_name.'', ''.$user.'', ''.$password.'', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
}catch(PDOException $e){
	echo "Errror: " . $e->getMessage();
	die();
}

/* Conexión a la base de datos para paginación */
// class Conection
// {
// 	protected $conection;

// 	function __construct()
// 	{
// 		$host = constant('HOST');
// 		$db_name = constant('DB');
// 		$user = constant('USER');
// 		$password = constant('PASSWORD');
// 		$conection_info = "mysql:host=$host;dbname=$db_name";

// 		try
// 		{
// 		    $this->conection = new PDO($conection_info, $user, $password);
// 		    $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 		    $this->conection->exec("set character set utf8");
// 		}
// 		catch (Exception $ex)
// 		{
// 		    echo "Ocurrió un error. Detalles: " . $ex->getMessage();
// 		    exit();
// 		}
// 	}
// }
?>