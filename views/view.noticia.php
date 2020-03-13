<?php
  $consulta = datosUsuario($conexion, $_SESSION['id_usuario']);
  $edicion = edicion($conexion, $_GET['edicion']);

?>
<!-- Ediciones -->
    <div class="site-section testimonial-wrap custom-owl-carousel" id="">
      <div class="container">
        <div class="row text-center justify-content-center mb-5"  data-aos="fade-up">
            <h1 class="section-title w-100 mx-auto">Noticia del día Edicion nº <?php echo $edicion['edicion'] ?></h1>
        </div>

        <div class="row noticiaUSTA">
          <div class="col-md-5" >
            <img src="public/images/noticias/<?php echo $edicion['imagen'] ?>" alt="" width=100%>
          </div>
          <div class="col-md-7">
            <small><b>Fecha: <?php echo fecha($edicion['fecha']) ?></b></small>
            <h3 class="text-secondary"><?php echo $edicion['titulo'] ?></h3>
            <p class="text-justify"><?php echo $edicion['parrafo'] ?></p>
            <a href="<?php echo $edicion['link'] ?>" target="_blank" class="btn btn-primary">Ver noticia completa</a>
            <hr>
            <div class="float-right">
              <a href="edit?edicion=<?php echo $edicion['edicion'] ?>" class="btn btn-secondary">Editar</a>
              <a href="javascript: history.go(-1)" class="btn btn-dark text-white" name="submit-tn">Volver</a>
            </div>
          </div>
        </div>

      </div>
    </div>