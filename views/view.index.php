<?php $edicion = ultimaEdicion($conexion); ?>
<!-- Noticia del día -->
    <div class="intro-section custom-owl-carousel" id="home-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mr-auto">
        
            <div class="owl-carousel slide-one-item-alt-text">
              <div class="slide-text">

                <h1 class="titulo-tomas"><?php echo $edicion['titulo']; ?></h1>
                <p class="mb-5 parrafo-tomas"><?php echo $edicion['parrafo']; ?></p>
                <p><a href="<?php echo $edicion['link']; ?>" target="_blank" class="btn btn-secondary py-3 px-5">Ver noticia completa</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 ml-auto" >                        
            <span class="text-edicion">Edición nº <?php echo $edicion['edicion']; ?> - <?php echo fecha($edicion['fecha']); ?></span>
            <div class="owl-carousel slide-one-item-alt">
              <img src="<?php echo URL . '/public/images/noticias/'. $edicion['imagen']; ?>" alt="Edición <?php echo $edicion['edicion']; ?>" >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Noticias del la semana -->
    <div class="site-section testimonial-wrap custom-owl-carousel" id="noticias-section">
      <div class="container">
        <div class="row text-center justify-content-center mb-5"  data-aos="fade-up">
          <div class="col-lg-6 mb-5 text-center">
            <h2 class="section-title w-100 mx-auto">Últimas Noticias</h2>
          </div>
        </div>
        <div class="row align-items-top">
          <?php
            $noticias = noticias($conexion);
            for ($i = 0; $i < 4; $i++):
          ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-tomas">
                <img class="card-img-top" src="<?php echo URL . '/public/images/noticias/'. $noticias[$i]['imagen']; ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $noticias[$i]['titulo']; ?></h5>
                <a href="<?php echo $noticias[$i]['link']; ?>" class="btn btn-primary" target="_blank">Ver noticia</a>
              </div>
              </div>
            </div>            
          <?php endfor ?>
        </div>
      </div>
    </div>