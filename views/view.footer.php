  <!-- Footer -->
    <footer class="footer-section bg-light">
      <div class="container" >
        <div class="row">
          <div class="col-md-3">
            <img src="https://www.usta.edu.co/footer/images/Acred_Multicampus_USTA.png" alt="" width=";">
          </div>
          <div class="col-md-3">
            <img src="https://www.usta.edu.co/footer/images/QS_Stars_USTA.png" alt="" width="150px;">
          </div>
          <div class="col-md-3">
            <img src="https://www.usta.edu.co/footer/images/Icontec_IQNet_USTA.png" alt="" width=";">
          </div>
          <div class="col-md-3">
            <img src="https://www.usta.edu.co/footer/images/Acred_Inter_USTA.png" alt="" width="250px;">
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Siguenos</h3>
            <div class="redes-tomas">
              <a  class="" href="#"><span class="icon-facebook"></span></a>
              <a  class="" href="#"><span class="icon-twitter"></span></a>
              <a  class="" href="#"><span class="icon-instagram"></span></a>
            </div>
          </div>

          <div class="col-md-4 ml-auto">
            <h3>Departamento de Comunicaciones</h3>
            <p>
              Edificio Santo Domingo<br>
              Calle 52 n.º 7-11, piso 2<br>
              PBX: (57-1) 587 87 97, ext. 1131<br>
              Bogotá, Colombia<br>
              <a href="" class="smoothscroll" target="_blank">www.usta.edu.co</a>
            </p>
          </div>
          <div class="col-md-4 text-right">
            <img src="<?php echo URL ?>/public/images/440.png" alt="" width="200px;">
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p><small class="block">Universidad Santo Tomás<br>Este newsletter llega a ustedes por pertenecer a nuestra comunidad online y tener una cuenta en el servidor institucional. Las opiniones expresadas en este newsletter son de exclusiva responsabilidad del autor y no reflejan, necesariamente, los puntos de vista de la Universidad Santo Tomás.<br><br>

                Institución de Educación Superior, reconocida mediante Resolución 3645 del 06 de agosto de 1965 expedida por el Ministerio de Justicia Institución de Educación Superior sujeta a la inspección y vigilancia del Ministerio de Educación Nacional - SNIES 1704</small> 
                </p>            
            </div>
          </div>          
        </div>
      </div>
    </footer>

</div><!-- FIN de site-wrap -->


<script src="<?php echo URL ?>/public/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo URL ?>/public/js/jquery-ui.js"></script>
<script src="<?php echo URL ?>/public/js/popper.min.js"></script>
<script src="<?php echo URL ?>/public/js/bootstrap.min.js"></script>
<script src="<?php echo URL ?>/public/js/owl.carousel.min.js"></script>
<script src="<?php echo URL ?>/public/js/jquery.easing.1.3.js"></script>
<script src="<?php echo URL ?>/public/js/aos.js"></script>
<script src="<?php echo URL ?>/public/js/jquery.fancybox.min.js"></script>
<script src="<?php echo URL ?>/public/js/jquery.waypoints.min.js"></script>
<script src="<?php echo URL ?>/public/js/jquery.animateNumber.min.js"></script>
<script src="<?php echo URL ?>/public/js/jquery.sticky.js"></script>
<script src="<?php echo URL ?>/public/js/main.js"></script>
<script src="<?php echo URL ?>/public/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URL ?>/public/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
  $('#tableEdiciones').DataTable({
    ordering:  false,
    language:{
      search: "Buscar",
      paginate: {
        previous: "Anterior",
        next: "Siguiente"
        }
    }
  });
});
</script>