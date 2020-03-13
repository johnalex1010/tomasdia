<?php
    $usuarios = usuarios($conexion);
?>
<!-- MIS Ediciones -->
<div class="site-section testimonial-wrap custom-owl-carousel" id="noticias-section">
  <div class="container">
    <div class="row text-center justify-content-center mb-5"  data-aos="fade-up">
      <div class="col-lg-6 mb-5 text-center">
        <h1 class="section-title w-100 mx-auto">Usuarios registrados</h1>
         <p data-aos="fade-up" class="alert alert-light text-center" role="alert">Para crear un nuevo usuario haz <a href="nuevo-usuario" class="btn text-success">click aquí</a></p>
      </div>
    </div>
    <div class="row align-items-top">
        
        <!-- //TABLE -->
        <div class="table-responsive">
            <table class="table" id="tableEdiciones" data-order='[[ 0, "desc" ]]' data-page-length='10'>
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Usuario</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Email</th>
                        <th scope="col" class="text-center">Activo</th>
                        <th scope="col" class="text-center">Editar</th>
                        <th scope="col" class="text-center">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario['usuario'] ?></td>
                        <td><?php echo $usuario['nombres'] ?></td>
                        <td><?php echo $usuario['email'] ?></td>
                        <?php if ($usuario['activo'] == 1): ?>
                            <td class="text-center">SI</td>
                        <?php else: ?>
                            <td class="text-center">No</td>
                        <?php endif ?>
                        <td class="text-center"><a href="editar-usuario?usuario=<?php echo $usuario['usuario'] ?>" class="btn btn-info"><span class="icon-edit"></span></a></td>
                        <td class="text-center"><a href="eliminar-usuario?usuario=<?php echo $usuario['usuario'] ?>" class="btn btn-danger"><span class="icon-trash-o"></span></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
            
    </div>
  </div>
</div>