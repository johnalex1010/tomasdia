<?php
    $ediciones = ediciones($conexion);
    $edicionLast = ultimaEdicion($conexion); 
?>
<!-- Ediciones -->
<div class="site-section testimonial-wrap custom-owl-carousel" id="noticias-section">
  <div class="container">
    <div class="row text-center justify-content-center mb-5"  data-aos="fade-up">
      <div class="col-lg-6 mb-5 text-center">
        <h1 class="section-title w-100 mx-auto">Ediciones <?php echo date('Y') ?></h1>
      </div>
    </div>
    <div class="row align-items-top">
        
        <!-- //TABLE -->
        <div class="table-responsive">
            <table class="table" id="tableEdiciones" data-order='[[ 0, "desc" ]]' data-page-length='10'>
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">Edición nº</th>
                        <th scope="col">Publicación</th>
                        <th scope="col">Título</th>
                        <th scope="col" class="text-center">URL</th>
                        <?php if (isset($_SESSION['id_usuario'])): ?>
                          <th scope="col" class="text-center">Ver</th>
                           <th scope="col" class="text-center">Editar</th>                           
                        <?php endif ?>                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="text-center"><?php echo $edicionLast['edicion'] ?></th>
                        <td><?php echo fechames($edicionLast['fecha']) ?></td>
                        <td><?php echo $edicionLast['titulo'] ?></td>
                        <td class="text-center">
                            <a href="<?php echo $edicionLast['link'] ?>" class="btn btn-secondary" target="_blank"><span class="icon-link"></span></a>
                        </td>
                        <?php if (isset($_SESSION['id_usuario'])): ?>
                            <td class="text-center">
                                <a href="noticia?edicion=<?php echo $edicionLast['edicion'] ?>" class="btn btn-success"><span class="icon-eye"></span></a>
                            </td>
                            <td class="text-center">
                                <a href="edit?edicion=<?php echo $edicionLast['edicion'] ?>" class="btn btn-info"><span class="icon-edit"></span></a>
                                </td>
                        <?php endif ?>
                    </tr>
                   
                <?php foreach ($ediciones as $edicion): ?>
                    <tr>
                        <th scope="row" class="text-center"><?php echo $edicion['edicion'] ?></th>
                        <td><?php echo fechames($edicion['fecha']) ?></td>
                        <td><?php echo $edicion['titulo'] ?></td>
                        <td class="text-center">
                            <a href="<?php echo $edicion['link'] ?>" class="btn btn-secondary" target="_blank"><span class="icon-link"></span></a>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
            
    </div>
  </div>
</div>