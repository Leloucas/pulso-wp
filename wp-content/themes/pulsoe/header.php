<!DOCTYPE html>
<html ng-app="pulsoe" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <base href="<?php echo BASE_URL; ?>"/>

        <link rel="icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/logo1.ico">
        <!-- PageInfo -->
        <meta name="description"
            content="Bolsa de trabajo y recursos humanos en Hermosillo, Sonora, con
            30 años de experiencia a su servicio nos ponemos en sus manos para brindarle la mejor opción de
            búsqueda de personal en la región noroeste de la república">

        <meta name="author" content="Sonnencode">
        <meta name="keywords" content="recursos humanos,Hermosillo,Sonora,pulso,empresarial,sonnencode,outsourcing">
        <meta name="robots" content="index,nofollow">
        <meta name="googlebot" content="noarchive">

        <!-- Open Graph data -->
        <meta property="og:title" content=""/>
        <meta property="og:type" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:description" content=""/>

        <title ng-bind-template="Pulso Empresarial">Pulso Empresarial</title>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/style.css" type="text/css" media="all" />
        
        <?php wp_head();?>
    </head>
    <body class="<?php echo get_body_class(); echo is_admin_bar_showing() ? ' doorstop' : ' ';?>">
        <!-- nav -->
        <nav class="navbar navbar-dark navbar-default navbar-expand-md fixed-top  <?php echo is_admin_bar_showing() ? 'doorstop' : '' ?>">
          <div class="container"><!--container-->
              <a class="navbar-brand" style="" href="#" onclick="window.scrollTo(0,0);">
                <img class="logo-img-xs" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo2.png">
              </a>
              <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div id="navbar" class="collapse navbar-collapse"><!--nav-collapse -->
                  <ul class="navbar-nav"><!--left-->
                      <!--staticPages-->
                      <li class="nav-item"><a class="nav-link" href="">Inicio</a></li>
                      <!--servicios-->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownServicios" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                        <div class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdownServicios">
                          <a class="dropdown-item" href="servicios">Nuestros Servicios</a>

                          <div class="dropdown-divider"></div>
                          
                          <a class="dropdown-item" href="servicios/busqueda">Búsqueda</a>
                          <a class="dropdown-item" href="servicios/evaluacion">Evaluación</a>
                          <a class="dropdown-item" href="servicios/subcontratacion">Subcontratación</a>
                          <a class="dropdown-item" href="servicios/administracion">Nómina</a>
                          <a class="dropdown-item" href="servicios/coaching">Coaching &amp; Mentoring</a>
                          <a class="dropdown-item" href="servicios/psicometrica">Ev. Psicométrica</a>
                          <a class="dropdown-item" href="servicios/outplacement">Outplacement</a>
                          <a class="dropdown-item" href="servicios/consultoria">Consultoría</a>
                        </div>
                      </li>
                      <!--Nosotros-->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownNosotros" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nosotros</a>
                          <div class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdownNosotros">
                            <a class="dropdown-item" href="principios">Principios y Convicciones</a>
                            <a class="dropdown-item" href="codigo">Código de conducta</a>
                            <a class="dropdown-item" href="compromiso">Compromiso interno</a>
                          </div>
                      </li>
                      <!--Vacantes-->
                      <!--<li class="dropdown nav-title">
                          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Vacantes
                              <span class="caret"></span></a>

                          <ul class="dropdown-menu" role="menu">
                              <li><a href="/vacantes">Todas las Vacantes</a></li>
                              <li class="divider"></li>
                              @include('globals.injects.categorias_ul') 
                          </ul>

                      </li>-->
                      <!--Contacto-->
                      <li class="nav-item"><a class="nav-link" href="contacto">Contacto</a></li>
                      <!--<li class="nav-title">
                          <a ng-href="#!/registro">
                              Registro
                          </a>
                      </li>-->
                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                          <!--<li ng-include="'angular-app/main/includes/login.html'" class="dropdown nav-title"></li>-->
                  </ul>
                  <!--ul Right -->
              </div><!--/.nav-collapse -->
          </div><!--/container-->
        </nav>
    <!-- /nav -->

    <div id="main-container" autoscroll="true">