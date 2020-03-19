<?php
	require_once '../models/model.perfil.php';
	$perfil = perfil($conexion, $_SESSION['id_usuario']);
?>
<nav class="site-navigation position-relative text-right" role="navigation">
  <!-- <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-xl-block"> -->
  <ul class="site-menu main-menu mr-auto d-none d-xl-block js-clone-nav">
    <li><a href="<?php echo URL ?>" class="nav-link">Noticia del día</a></li>
    <li><a href="<?php echo URL ?>#noticias-section" class="nav-link">Últimas Noticias</a></li>
    <li><a href="<?php echo URL ?>/ediciones" class="nav-link" >Ediciones 2020</a></li>
    <?php if (isset($_SESSION['id_usuario'])): ?>
	<li class="menu">
		<a href=""><span class="icon-user"></span> <?php echo ucwords($perfil['usuario']) ?> <span class="icon-sort-down"></span></a>
		<ul class="sub-menu">
			<li><a href="<?php echo URL ?>/crear" class="nav-link" >Crear noticia</a></li>
			<li><a href="<?php echo URL ?>/perfil" class="nav-link" >Mi perfil</a></li>
			<li><a href="<?php echo URL ?>/mis-noticias" class="nav-link" >Mis noticias</a></li>
			<?php if ($perfil['id_permiso'] == 1): ?>
				<li><a href="<?php echo URL ?>/usuarios" class="nav-link" >Usuarios</a></li>
			<?php endif ?>
			<li><a href="<?php echo URL ?>/cerrar-session" class="nav-link" >Cerrar sesión</a></li>
		</ul>
	</li>
    <?php endif ?>
  </ul>
</nav>
