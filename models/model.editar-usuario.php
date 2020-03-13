<?php
	//Editar USUARIO
	function editUsuario($conexion,$nuevoUsuario){

		$edit_usuario = $conexion->prepare("UPDATE t_usuario
                                                SET
                                                    password=:password,
                                                    nombres=:nombres,
                                                    email=:email,
                                                    activo=:activo,
                                                    id_permiso=:id_permiso
                                                WHERE usuario=:usuario");
        	$edit_usuario->execute(
        		array(	
        			':usuario' => $nuevoUsuario[3],
        			':password' => $nuevoUsuario[4],
        			':nombres' => $nuevoUsuario[0],
        			':email' => $nuevoUsuario[1],
        			':activo' => $nuevoUsuario[5],
        			':id_permiso' => $nuevoUsuario[2]
        		)
        	);
        	unset($_POST);
            header('Location:' . URL ."/usuarios");
	}

    //SELECCIONAR USUARIO
    function usuarioAEditar($conexion, $usuario){
        $usuarioAEditar = $conexion->prepare("SELECT * FROM t_usuario WHERE usuario=:usuario");
        $usuarioAEditar->execute(array(':usuario' => $usuario));
        $usuarioAEditar = $usuarioAEditar->fetch();
        return $usuarioAEditar;
    }

?>