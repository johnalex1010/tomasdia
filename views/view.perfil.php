<!-- PERFIL -->
<div class="site-section testimonial-wrap custom-owl-carousel" id="">
  <div class="container">
    <div class="row text-center justify-content-center mb-5"  data-aos="fade-up">
        <h1 class="section-title w-100 mx-auto"><?php echo $perfil['nombres'] ?></h1>
    </div>

    <div class="row noticiaUSTA">
      <div class="col-md-5" >
        <div class="jumbotron">
          <p><strong class="text-bold text-primary">Usuario: </strong><?php echo $perfil['usuario'] ?></p>
          <p><strong class="text-bold text-primary">Email: </strong><?php echo $perfil['email'] ?></p>
          <p><strong class="text-bold text-primary">Permiso: </strong><?php echo $perfil['permiso'] ?></p>
          <?php if ($perfil['activo'] == 1): ?>
            <p class="text-success"><strong class="text-bold text-primary">Activo: </strong> <b>SI</b></p>
          <?php else: ?>
            <p class="text-danger"><strong class="text-bold text-primary">Activo: </strong> <b>NO</b></p>
          <?php endif ?>
          <hr>
          <a class="btn btn-secondary" href="mis-noticias">Mis noticias</a>
        </div>
      </div>
      <div class="col-md-7">
        <form method="POST" class="jumbotron">
          <?php if ($mensaje == true): ?>
            <div class="alert alert-success" role="alert">
              La contraseña se ha cambiado correctamente
            </div>
          <?php endif ?>
          <h6 class="text-center">Cambiar contraseña</h6>
          <span class="text-danger"><?php echo $error; ?></span>
          <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="password">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Repetir contraseña" name="repassword">
          </div>
          <button type="submit" class="btn btn-secondary" name="submit">Cambiar</button>
        </form>
      </div>
    </div>

  </div>
</div>