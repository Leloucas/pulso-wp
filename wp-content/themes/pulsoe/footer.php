    </div> <!-- #main-container -->
  <div class="footer-container">
      <footer class="text-center b_black">
        <div class="footer-above b_black">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-6">
                        <a class="text-center" href="" onclick="window.scrollTo(0,0);">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.png">
                        </a>
                        <br>
                        <br>

                        <address>
                            Rosales 97A-Sur,
                            Entre Morelia y Monterrey<br>
                            Colonia Centro, 83000<br>
                            Hermosillo, Sonora, México<br>
                            Tel.  (52) 662-212 5204 o 662-217 0919
                        </address>
                    </div>
                    <div class="footer-col col-md-6">

                        <h3>Visite nuestras redes sociales</h3>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/PulsoEmpresarialAgenciaDeColocacion/" class="btn-social btn-outline" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <!--<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>-->
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/pub/pulso-empresarial/27/aab/103" class="btn-social btn-outline" target="_blank"><i class="fab fa-linkedin-in"></i></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Pulso Empresarial <?php echo date('Y'); ?>
                        
                    </div>
                    <br>
                </div>
            </div>
        </div>

    </footer>

  </div>
    <?php wp_footer();?>

    <script src="<?php echo get_template_directory_uri(); ?>/dist/bundle.js"></script>
  </body>
</html>