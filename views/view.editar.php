<?php
  $id_edicion = ($_POST['id_edicion'] == "") ?  trim($_GET['edicion']) : trim($_POST['id_edicion']);
  $consulta = datosUsuario($conexion, $_SESSION['id_usuario']);
  $edicion = edicion($conexion, $id_edicion);
?>
<!-- Ediciones -->
    <div class="site-section testimonial-wrap custom-owl-carousel" id="">
      <div class="container">
        <div class="row text-center justify-content-center mb-5"  data-aos="fade-up">
            <h1 class="section-title w-100 mx-auto">Editar Noticia del día</h1>
        </div>

        <p data-aos="fade-up" class="alert alert-light text-center" role="alert">Hola <strong class="text-primary"><?php echo $consulta['nombres'] ?></strong>, estas apunto de <strong>editar</strong> esta noticia.</p>
        <form action="" method="POST" enctype="multipart/form-data" data-aos="fade-up">
          <input type="hidden" name="id_edicion" value="<?php echo $id_edicion = ($_POST['id_edicion'] == "") ?  trim($_GET['edicion']) : trim($_POST['id_edicion']); ?>">
          <div class="form-row">  
            <div class="form-group col-md-12">
              <h3 class="h3 text-primary text-center">Edición nº <?php echo $edicion['edicion'] ?></h3>
            </div>
            <div class="form-group col-md-12">
              <label for="" class="h4 text-secondary">Título</label>
              <small class="text-danger"><?php echo $error[1]; ?></small>
              <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Títiulo  de la noticia" name="titulo" value="<?php echo $titulo = ($_POST['titulo'] == "") ?  trim($edicion['titulo']) : trim($_POST['titulo']); ?>" autocomplete="off">
            </div>
            <div class="form-group col-md-12">
              <label for="" class="h4 text-secondary">Parrafo</label>
              <small class="text-danger"><?php echo $error[2]; ?></small>
              <textarea name="parrafo" id="" cols="30" rows="5" class="form-control form-control-sm" placeholder="Parrafo (Solo uno)" name="parrafo" ><?php echo $parrafo = ($_POST['parrafo'] == "") ?  trim($edicion['parrafo']) : trim($_POST['parrafo']); ?></textarea>
            </div>
            <div class="form-group col-md-12">
              <label for="" class="h4 text-secondary">URL</label>
              <small class="text-danger"><?php echo $error[3]; ?></small>              
              <input type="text" name="link" id="" cols="30" rows="5" class="form-control form-control-sm" placeholder="Link de la notica completa" name="link" value="<?php echo $link = ($_POST['link'] == "") ?  trim($edicion['link']) : trim($_POST['link']); ?>" autocomplete="off"/>
            </div>
            <div class="form-group col-md-12">
              <label for="" class="h4 text-secondary">Imágen</label>
              <div class="row">
                <div class="col-md-4">
                  <input type="hidden" name="imagen" value="<?php echo $imagen = ($_POST['imagen'] == "") ?  trim($edicion['imagen']) : trim($_POST['imagen']); ?>">
                  <img src="<?php echo URL ?>/public/images/noticias/<?php echo $edicion['imagen'] ?>" alt="" width=100%>
                </div>
                <div class="col-md-8">
                  <label for="" class="h5 text-secondary">Editar imágen</label>
                  <small class="text-danger"><?php echo $error[4]; ?></small>
                  <small>Tamaño de la imagen es 900px de ancho por 600px de alto.<br><b>Si la imagen es correcta, deje este campo vacio.</b></small><br><p></p>
                  <input type="file" name="imagen" id="" cols="30" rows="5" class=""/>
                </div>
              </div>
            </div>
            <p  class="alert alert-dark" role="alert">Está noticia se enviará a los siguientes correos: <strong><span class="text-primary">prensausta@usantotomas.edu.co</span></strong> y <strong><span class="text-primary"><?php echo $consulta['email'] ?></span></strong>.</p>      
            <div class="form-group col-md-12">
              <button type="submit" class="btn btn-secondary" name="submit-tn">Guardar y enviar</button>
              <a href="ediciones" class="btn btn-primary text-secondary" name="submit-tn">Volver</a>
            </div>
          </div>
        </form>
      </div>
    </div>