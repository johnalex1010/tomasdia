<!-- LOGIN -->
<div class="intro-section custom-owl-carousel" id="home-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <h1>Recuperar acceso</h1>
        <form method="POST">
          <span class="text-danger"><?php echo $error; ?></span>
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Correo electrónico" name="email">
          </div>
          <button type="submit" class="btn btn-secondary" name="submit">Recuperar</button> <a href="login" class="btn btn-primary">Iniciar sesión</a>
        </form>
      </div>
    </div>
  </div>
</div>