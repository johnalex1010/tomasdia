<?php
	//CREAR USUARIO
	function newUsuario($conexion,$nuevoUsuario){
		$new_usuario = $conexion->prepare("INSERT INTO t_usuario (usuario, password, nombres, email, activo, id_permiso) VALUES (:usuario, :password, :nombres, :email, :activo, :id_permiso)");
        	$new_usuario->execute(
        		array(	
        			':usuario' => $nuevoUsuario[3],
        			':password' => $nuevoUsuario[4],
        			':nombres' => $nuevoUsuario[0],
        			':email' => $nuevoUsuario[1],
        			':activo' => 1,
        			':id_permiso' => $nuevoUsuario[2]
        		)
        	);
        	unset($_POST);
                header('Location:' . URL ."/usuarios");
	}

?>