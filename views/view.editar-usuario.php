<?php
  $usuario = ($_POST['usuario'] == "") ? trim($_GET['usuario']) : trim($_POST['usuario']);
  $usuarioAEditar = usuarioAEditar($conexion, $usuario);
?>
<!-- Ediciones -->
    <div class="site-section testimonial-wrap custom-owl-carousel" id="">
      <div class="container">
        <div class="row text-center justify-content-center mb-5"  data-aos="fade-up">
            <h1 class="section-title w-100 mx-auto">Editar Usuario</h1>
        </div>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" data-aos="fade-up">
          <input type="hidden" value="1" name="activo">
          <div class="form-row">
            <div class="form-group col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="" class="h4 text-secondary">Nombres</label>
                    <small class="text-danger"><?php echo $error[1]; ?></small>
                    <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombres" value="<?php echo $nombres = ($_POST['nombres'] == "") ?  trim($usuarioAEditar['nombres']) : trim($_POST['nombres']); ?>" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="" class="h4 text-secondary">Email</label>
                    <small class="text-danger"><?php echo $error[2]; ?></small>
                    <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $email = ($_POST['email'] == "") ?  trim($usuarioAEditar['email']) : trim($_POST['email']); ?>" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="" class="h4 text-secondary">Permiso</label>
                    <small class="text-danger"><?php echo $error[3]; ?></small>
                    <select name="permiso" id="permiso" class="form-control form-control-sm">
                      <option value="" disabled selected>Seleccione el permiso</option>
                      <option value="1">Super Administrator</option>
                      <option value="2">Administrator</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="" class="h4 text-secondary">Activo</label>
                    <small class="text-danger"><?php echo $error[7]; ?></small>
                    <select name="activoa" id="activoa" class="form-control form-control-sm">
                      <option value="" disabled selected>Seleccione la opción</option>
                      <option value="1">Si</option>
                      <option value="0">No</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="" class="h4 text-secondary">Usuario</label>
                    <small class="text-danger"><?php echo $error[4]; ?></small>
                    <input type="hidden" id="" cols="30" rows="5" class="form-control form-control-sm" name="usuario" value="<?php echo $usuario = ($_POST['usuario'] == "") ?  trim($usuarioAEditar['usuario']) : trim($_POST['usuario']); ?>" autocomplete="off"/>
                    <input type="text" disabled id="" cols="30" rows="5" class="form-control form-control-sm" name="usuario" value="<?php echo $usuario = ($_POST['usuario'] == "") ?  trim($usuarioAEditar['usuario']) : trim($_POST['usuario']); ?>" autocomplete="off"/>
                  </div>
                  <div class="form-group">
                    <label for="" class="h4 text-secondary">Contraseña</label>
                    <small class="text-danger"><?php echo $error[5]; ?></small>
                    <input type="password" id="" cols="30" rows="5" class="form-control form-control-sm" name="password" value="<?php echo trim($_POST['password']) ?>" autocomplete="off"/>
                  </div>
                  <div class="form-group">
                    <label for="" class="h4 text-secondary">Repetir contraseña</label>
                    <small class="text-danger"><?php echo $error[6]; ?></small>
                    <input type="password" id="" cols="30" rows="5" class="form-control form-control-sm" name="repassword" value="<?php echo trim($_POST['repassword']) ?>" autocomplete="off"/>
                  </div>

                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-secondary float-right" name="submit-user">Editar usuario</button>
                </div>
              </div>                  
            </div>
          </div>
        </form>
      </div>
    </div>