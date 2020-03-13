<?php $consulta = datosUsuario($conexion, $_SESSION['id_usuario']); ?>
<!-- Ediciones -->
<div class="site-section testimonial-wrap custom-owl-carousel" id="">
  <div class="container">
    <div class="row text-center justify-content-center mb-5"  data-aos="fade-up">
        <h1 class="section-title w-100 mx-auto">Crear nueva Noticia del día</h1>
    </div>

    <p data-aos="fade-up" class="alert alert-light text-center" role="alert">Hola <strong class="text-primary"><?php echo $consulta['nombres'] ?></strong>, estas apunto de crear una nueva noticia. Si quieres ver las noticias que haz realizado da <a href="mis-noticias" class="text-success">click aquí</a>.</p>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data" data-aos="fade-up">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="" class="h4 text-secondary">Título</label>
          <small class="text-danger"><?php echo $error[1]; ?></small>
          <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Títiulo  de la noticia" name="titulo" value="<?php echo trim($_POST['titulo']) ?>" autocomplete="off">
        </div>
        <div class="form-group col-md-12">
          <label for="" class="h4 text-secondary">Parrafo</label>
          <small class="text-danger"><?php echo $error[2]; ?></small>
          <textarea id="parrafo" cols="30" rows="5" class="form-control form-control-sm" placeholder="Parrafo (Solo uno)" name="parrafo" ><?php echo trim($_POST['parrafo']) ?></textarea>
        </div>
        <div class="form-group col-md-12">
          <label for="" class="h4 text-secondary">URL</label>
          <small class="text-danger"><?php echo $error[3]; ?></small>
          <input type="text" name="link" id="" cols="30" rows="5" class="form-control form-control-sm" placeholder="Link de la notica completa" name="link" value="<?php echo trim($_POST['link']) ?>" autocomplete="off"/>
        </div>
        <div class="form-group col-md-12">
          <label for="" class="h4 text-secondary">Imágen</label>
          <small class="text-danger"><?php echo $error[4]; ?></small>
          <small>Tamaño de la imagen es 900px de ancho por 600px de alto</small><br>
          <input type="file" name="imagen" id="" cols="30" rows="5" class=""/>
        </div>

        <p  class="alert alert-dark" role="alert">Está noticia se enviará a los siguientes correos: <strong><span class="text-primary">prensausta@usantotomas.edu.co</span></strong> y <strong><span class="text-primary"><?php echo $consulta['email'] ?></span></strong>.</p>
  
        <div class="form-group col-md-12">
          <button type="submit" class="btn btn-secondary" name="submit-tn">Crear noticia</button>
        </div>
      </div>
    </form>
  </div>
</div>