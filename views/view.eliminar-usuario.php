<?php
  echo $usuario = $_GET['usuario'];
  $userDelete = usuarioAEliminar($conexion, $usuario);
?>
<!-- Eliminiar -->
<div class="site-section testimonial-wrap custom-owl-carousel text-center" id="">
  <div class="container">
    <div class="row text-center justify-content-center mb-5"  data-aos="fade-up">
        <h1 class="section-title w-100 mx-auto">Eliminar usuario</h1>
    </div>
    <div class="row text-center">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" data-aos="fade-up">
          <p>¿Está seguro de eliminiar el usuario: <strong class="text-secondary"><?php echo $userDelete['nombres'] ?></strong>?</p>
          <hr>
          <div>
            <input type="hidden" value="<?php echo $userDelete['usuario'] ?>" name="usuario" >
            <button class="btn btn-danger" type="submit-delete" name="submit-delete" >Eliminiar</button>
            <a href="javascript: history.go(-1)" class="btn btn-dark text-white" name="submit-tn">Cancelar</a>
          </div>
        </form>        
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</div>