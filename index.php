<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content='Página oficial del centro de Formación "La Criolla"'>
  <meta name="author" content="Carmelo Vázquez">
  <title>Centro de Formación Profesional nº61 "La Criolla"</title>
  <link rel="icon" href="./img/logos/Logo CFP.png">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique&display=swap" rel="stylesheet">
</head>
<body>
  <div id="popup">
    <img src="./img/logos/clipboard.svg" alt=""> 
    <p>Copiado al portapapeles</p>
  </div>

  <header>
    <img src="./img/logos/Logo CFP.png" class="header-logo" alt='Logo del centro "La Criolla"'>
    <nav>
      <a href="index.php" class="nav-button">
        <div>Sobre nosotros</div>
      </a>
      <a href="trayectorias.php" class="nav-button">
        <div>Trayectos</div>
      </a>
      <a href="inscripciones.php" class="nav-button">
        <div>Inscripciones</div>
      </a>
    </nav>
  </header>

  <main>
    <img src="img/CFP.jpg" class="imagen-centro d-block" alt="Imagen de los miembros del centro">
    <h1 id="sobre-nosotros">¿Quienes somos?</h1>
    <p>
      El Centro de Formación Profesional N° 61 dependiente de la Dirección de 
      Educación Técnico Profesional del Consejo General de Educación funciona 
      en la Localidad de La Criolla desde el año 2014 y actualmente cuenta 
      con un anexo en la ciudad vecina de Colonia Ayuí. Somos una institución 
      educativa que brinda trayectos de formación profesional y capacitación 
      laboral para una rápida inserción en el mercado socioproductivo local y 
      regional. La Formación Profesional permite compatibilizar la promoción 
      social, profesional y personal con la productividad de la economía 
      nacional, regional y local.
    </p>

    <div id="main-carousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/carousel-item-1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/carousel-item-2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/carousel-item-3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#main-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#main-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <h2>Objetivos</h2>
    <p>
      Nuestra oferta busca preparar, actualizar y desarrollar las capacidades 
      de las personas para el mundo del trabajo. Capacitamos en conocimientos 
      específicos, competencias básicas, profesionales y sociales para que 
      jóvenes y adultos/as puedan mejorar sus oportunidades de empleabilidad.
      La oferta de cursos y trayectos se orienta a temáticas como: Informática,
      gastronomía, herrería, electricidad, belleza y cosmética, marroquinería, 
      entre otras.
    </p>

    <h2>Ubicación</h2>
    <p>Rio Bermejo N°278 La Criolla, Dpto Concordia. Instalaciones del Club Juan B. Alberdi.</p>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d504.47703392390974!2d-58.107100941317334!3d-31.271095445522374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95adecb04d7457bd%3A0x98aa53d46aa8cd3f!2sR%C3%ADo%20Bermejo%2C%20La%20Criolla%2C%20Entre%20R%C3%ADos!5e1!3m2!1ses-419!2sar!4v1731918205681!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <h2>Novedades</h2>
      <?php
      include "script/mostrar_novedades.php"
      ?>
  </main>

  <footer>
    <p> Contactos y redes</p>
    <div class="contactos">
      <div class="d-flex copiable" data-clipboard="345 412 3356">
        <p><img src="img/logos/whatsapp.svg" alt=""> Whatsapp: 345 412 3356</p>
      </div>
      <div class="d-flex copiable" data-clipboard="cfplacriolla@gmail.com">
        <p><img src="img/logos/mail.svg" alt=""> Administración: cfplacriolla@gmail.com</p>
      </div>
      <div class="d-flex copiable" data-clipboard="cfp61.lacriolla@gmail.com">
        <p><img src="img/logos/mail.svg" alt=""> Rectoría: cfp61.lacriolla@gmail.com</p>
      </div>
      <div class="d-flex copiable" data-clipboard="cfp61.cd@entrerios.edu.ar">
        <p><img src="img/logos/mail.svg" alt=""> Institucional: cfp61.cd@entrerios.edu.ar </p>
      </div>
      <div class="d-flex">
        <p>
          <img src="img/logos/facebook.svg" alt=""> 
          <a href="https://www.facebook.com/groups/368903159842499/">
            Facebook: Centro de Formación Profesional N.61- La Criolla.
          </a>
        </p>
      </div>
      <div class="d-flex">
        <p>
          <img src="img/logos/instagram.svg" alt=""> 
          <a href="https://www.instagram.com/cfp61lacriolla/">
            Instagram: @cfp61lacriolla
          </a>
        </p>
      </div>
    </div>
    <p>Copyright © 2024 Centro de Formación Profesional "La Criolla"</p>
  </footer>
  
  <script src="js/main.js"></script>
</body>
</html>