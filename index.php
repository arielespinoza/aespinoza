<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ariel Espinoza | Diseñador UX</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,900i" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!-- menú -->
    <div class="list-group navbar" id="sidebar" data-spy="affix" data-offset-top="770">
      <a href="#inicio" class="soft">
        <div class="isotipo"></div>
      </a>
      <ul class="nav" id="mynav" >
          <li>
            <a href="#inicio" class="list-group-item soft">
              Inicio
            </a>
          </li>
          <li>
            <a href="#perfil" class="list-group-item soft">
              Perfil
            </a>
          </li>
          <li> 
            <a href="#metodologia" class="list-group-item soft" contenteditable="false">
              Metodología
            </a>
          </li>
          <li> 
            <a href="#portafolio" class="list-group-item soft" contenteditable="false">
              Portafolio
            </a>
          </li>
          <li> 
            <a href="#experiencia" class="list-group-item soft" contenteditable="false">
              Experiencia
            </a>
          </li>
          <li> 
            <a href="#contacto" class="list-group-item soft" contenteditable="false">
              Contacto
            </a>
          </li>
      </ul>
    </div>
    <!-- menú -->

    <section class="inicio" id="inicio">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 col-md-offset-2 col-lg-offset-2 text-center infoHome">
            <img src="img/logo.png" alt="logotipo">
            <h1 class="text-white">ARIEL ESPINOZA SALINAS</h1>
            <P class="text-white">Diseñador UX / Licenciado en Diseño Gráfico</P>
            <div class="btnhome">
              <a href="http://www.arielespinoza.cl/archivos/cv.pdf" target="_blank" class="btn-out btn-cv">
                <img src="img/pdf.png" alt="icon" class="pull-left">
                Curriculum
              </a>
              <a href="http://www.linkedin.com/in/arielespinoza" target="_blank" class="btn-out btn-linkedin">
                <img src="img/linkedin.png" alt="icon" class="pull-left">
                Perfil Linkedin
              </a>
            </div>
            <a href="#perfil" class="soft">
              <div class="arrowDown"></div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="perfil pv140" id="perfil">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1 text-center">
            <img src="img/perfil.png" alt="img-perfil">
          </div>
          <div class="col-md-6 col-lg-6">
            <h1>Perfil personal</h1>
            <p>
              Soy Licenciado en Diseño Gráfico de profesión, he desarrollado mi experiencia laboral en las áreas de <strong>Banca, Marketing Digital, TI e Inteligencia de Negocios</strong>.
            </p>
            <p> 
               Mi trabajo se centra en las personas, creo que desde ese punto de vista se debe hacer converger <strong>tecnología, diseño y negocio para generar buenas experiencias que agreguen valor</strong>. Soy partidario del trabajo en equipo y en especial de la gente que siente motivación por lo que hace.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="metodologia" id="metodologia">
      <div class="half dark pv140">
        <div class="col-md-9 col-lg-9 col-sm-12 col-md-offset-2 col-lg-offset-2 text-center">
          <h1 class="mtop70">Trabajo en equipo</h1>
          <p>
            "Equipo… tenemos que hacer modificaciones en el flujo… ¡Pero si ya estamos terminando el Front!”
          </p>
          <p>
            Imagino que no soy el primero en escuchar esa frase, a raíz de esto surge mi propuesta de trabajo colaborativo poniendo en el centro a los involucrados clave durante cada hito del proceso.
          </p>
        </div>
      </div>
      <div class="half gray text-center pv140">
        <div class="col-md-10 col-lg-10 col-sm-12  text-center">
          <img src="img/metodologia.png" alt="img metodología">
        </div>
      </div>
    </section>

    <section class="portafolio pv140 text-center" id="portafolio">
      <h1 class="mbottom100 mtop0">Portafolio</h1>
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 nopadding">
        <a href="#" class="item turquesa" data-toggle="modal" data-target="#homeApp">
          <img src="img/homeApp.png" class="imgMobile">
        </a>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 nopadding">
        <a href="#" class="item celeste" data-toggle="modal" data-target="#seguroAuto">
          <img src="img/seguroAuto.png" class="imgMobile">
        </a>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 nopadding">
        <a href="#" class="item morado" data-toggle="modal" data-target="#altainmediata">
          <img src="img/altaInmediata.png" class="imgMobile">
        </a>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 nopadding">
        <a href="#" class="item amarillo" data-toggle="modal" data-target="#bnamericas">
          <img src="img/bnamericas.png" class="imgDesktop">
        </a>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 nopadding">
        <a href="#" class="item anaranjado" data-toggle="modal" data-target="#altoincendios">
          <img src="img/altoincendios.png" class="imgDesktop">
        </a>
      </div> 
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 nopadding">
        <a href="#" class="item verde" data-toggle="modal" data-target="#levitar">
          <img src="img/levitar.png" class="imgDesktop">
        </a>
      </div> 
    </section>

    <section class="experiencia text-center pv140" id="experiencia">
      <h1 class="mbottom100 mtop0">He colaborado con</h1>
      <div class="container">
        <div class="fila">
          <div class="col-md-3 col-lg-3 col-sm-12 logos">
            <img src="img/bbva.png" alt="Bbva">
          </div>
          <div class="col-md-3 col-lg-3 col-sm-12 logos">
            <img src="img/intellego.png" alt="Intellego">
          </div>
          <div class="col-md-3 col-lg-3 col-sm-12 logos">
            <img src="img/havas.png" alt="Havas">
          </div>
          <div class="col-md-3 col-lg-3 col-sm-12 logos">
            <img src="img/bnamericas2.png" alt="Bnamericas">
          </div>
        </div>
        <div class="fila">
          <div class="col-md-3 col-lg-3 col-sm-12 logos">
            <img src="img/minagri.png" alt="Minagri">
          </div>
          <div class="col-md-3 col-lg-3 col-sm-12 logos">
            <img src="img/fucoa.png" alt="Fucoa">
          </div>
          <div class="col-md-3 col-lg-3 col-sm-12 logos">
            <img src="img/apiux.png" alt="Apiux">
          </div>
          <div class="col-md-3 col-lg-3 col-sm-12 logos">
            <img src="img/crn.png" alt="Corporación nacional de riego">
          </div>
        </div>
      </div>
    </section>
    <!-- contacto -->
    <section class="contacto pv140" id="contacto">
      <h1 class="mbottom100 text-center">Contáctame</h1>
      <div class="container">
        <div class="col-md-4 col-lg-4 col-sm-12 col-md-offset-1 col-lg-offset-1">
          <h3 class="mtop0">Datos de contacto</h3>
          <ul>
            <li>
              <img src="img/icon-telefono.png" alt="icon teléfono">
              +569 94946228
            </li>
            <li>
              <img src="img/icon-email.png" alt="icon email">
              <a href="mailto:a.espinozasalinas@gmail.com">a.espinozasalinas@gmail.com</a>
            </li>
            <li>
              <img src="img/icon-linkedin.png" alt="icon linkedin">
              <a href="www.linkedin.com/in/arielespinoza" target="blank">/arielespinoza</a>
            </li>
            <li>
              <img src="img/icon-pixeles.png" alt="icon pixeles">
              <a href="https://500px.com/aespinozasalinas" target="blank">/aespinozasalinas</a>
            </li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
          <!-- form-->
          <div id="message"></div>
          <form method="post" action="contact.php" name="contactform" id="contactform">
            <div class="form-group">
              <label for="name">¿Cuál es tu nombre?</label>
              <input name="name" type="text" class="form-control" id="name" size="30">
            </div>
            <div class="form-group">
              <label for="email">¿Cuál es tu email?</label>
              <input name="email" type="email" class="form-control" id="email" size="30">
            </div>
            <div class="form-group">
              <label for="comments">Escribe tu mensaje</label>
              <textarea name="comments" class="form-control" cols="40" rows="3" id="comments"></textarea> 
            </div>
            <div class="text-right">
              <button id="submit" type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form>
          <!-- form -->
        </div>
      </div>
    </section>
    <!-- contacto -->

    <a href="#inicio" class="soft arrow-up">
      <img src="img/arrow-up.png" alt="icon up">
    </a>

    <!-- modales -->

    <?php include("includes/homeapp.php"); ?>
    <?php include("includes/seguroautomotriz.php"); ?>
    <?php include("includes/altainmediata.php"); ?>
    <?php include("includes/bnamericas.php"); ?>
    <?php include("includes/altoincendios.php"); ?>
    <?php include("includes/levitar.php"); ?>

    <!-- modales -->


    <!-- scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript" src="js/jquery.jigowatt.js"></script><!-- AJAX Form Submit -->
    <!-- scripts -->

  </body>
</html>