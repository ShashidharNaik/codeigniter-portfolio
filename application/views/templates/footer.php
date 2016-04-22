      <!-- BEGIN FOOTER -->
      <section class="p-b-50 p-t-50 bg-master-darkest">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <p class="fs-11 hint-text text-white font-arial no-margin small-text">Copyright &copy; <?php echo date("Y"); ?> Name. All Rights Reserved.</p>
            </div>
            <div class="col-md-5">
              <ul class="no-style fs-12 no-padding pull-right xs-pull-left xs-m-t-20">
                <li class="inline no-padding"><a href="https://nl.linkedin.com/in/niels-hilgersom-00758770" class="text-white p-l-30 fs-16 xs-no-padding" target="_blank"><i class="fa fa-github"></i></a></li>
                <li class="inline no-padding"><a href="https://github.com/ssgtcookie" class="text-white p-l-30 fs-16" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- END FOOTER -->
    </div>
    <!-- BEGIN CORE FRAMEWORK -->
    <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>pages/js/pages.image.loader.js" type="text/javascript" ></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Waits for the images to be loaded before applying the Isotope plugin -->
    <script src="<?php echo base_url(); ?>assets/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope plugin arranges the card layout -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-isotope/isotope.pkgd.min.js" type="text/javascript"></script>
    <!-- BEGIN RETINA IMAGE LOADER -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-unveil/jquery.unveil.min.js"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN PAGES FRONTEND LIB -->
    <script type="text/javascript" src="<?php echo base_url(); ?>pages/js/pages.frontend.js"></script>
    <!-- END PAGES LIB -->
    <!-- BEGIN YOUR CUSTOM JS -->
    <script src="<?php echo base_url(); ?>assets/js/gallery.js" type="text/javascript"></script>
    <!-- BEGIN FORM VALIDATION -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="<?php echo base_url(); ?>assets/js/google_map.js" type="text/javascript"></script>
    <script>
      $(document).ready(function() {
          $('#contactForm').validate();
      });
    </script>
    <!-- END FORM VALIDATION -->
    <?php if (isset($title) == "Contact"){echo $script;}?>
  </body>
</html>