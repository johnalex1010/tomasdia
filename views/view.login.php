<!-- LOGIN -->
<div class="intro-section custom-owl-carousel" id="home-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <?php
          if (isset($_SESSION['mensaje'])) {
            echo $_SESSION['mensaje'];
          }
        ?>
        <h1>Inicio de sesión</h1>
        <form method="POST">
          <span class="text-danger"><?php echo $error; ?></span>
          <div class="form-group">
            <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuario" name="usuario">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="password">
          </div>
          <button type="submit" class="btn btn-secondary" name="submit">Iniciar sesión</button> <a href="recuperar" class="btn btn-primary">¿Olvido su contraseña?</a>
        </form>
      </div>
    </div>
  </div>
</div>