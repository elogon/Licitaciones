<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"  href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--  style -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>style.css"> 
    <style>
.body{
  position: relative;
  
  }
.navbar{
  color: white;
}
.Home{
 margin-top: 50px;
  background-image: url("<?php bloginfo( 'template_url' ); ?>/img/Objeto04.png");
  background-color: #cccccc;
  height:100%;
  max-width: 100%;
  background-size: cover;
  padding: 150px 30px 150px 30px;
  
}

.About{
  background-image: url("<?php bloginfo( 'template_url' ); ?>/img/Laptop03.png");
  background-color: #cccccc;
  height:100%;
  max-width: 100%;
  background-size: cover;
  padding: 50px 30px 50px 30px;
}
.Home .display-2{
  font-family: 'Oswald', sans-serif;
  z-index: 2;
}
.Portafolio{
  padding: 50px 30px 50px 30px; 
}
.Portafolio .col-sm-4{
  padding: 20px 10px 10px 10px;
}
.form-group{
  color: white;
}
.Contacto{
  padding: 50px 30px 50px 30px;
  background-image: url("<?php bloginfo( 'template_url' ); ?>/img/Laptop02.png");
  background-color: #cccccc;
  height:100%;
  max-width: 100%;
  background-size: cover;
  
}
.redes{
  padding: 10px 50px 10px 50px;
}
/* Style all font awesome icons */
.fa {
    padding: 20px;
    font-size: 40px;
    width: 100px;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
}

/* Add a hover effect if you want */
.fa:hover {
    opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
    background: #3B5998;
    color: white;
}

/* Twitter */
.fa-twitter {
    background: #55ACEE;
    color: white;
}
.fa-linkedin {
    background: rgb(0, 123, 181);
    color: white;
}
.fa-github {
    background: black;
    color: white;
}
    </style>
  </head>
  <body>
  <header>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title></title>
  
</header>
<!-- Acá va el Menú -->
<div class="container-fluid bg-inverse fixed-top btn-dark">
  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
  </nav>
</div>

  <?php wp_nav_menu(array(
      'theme_location' => 'superior',
      'container' => 'div',
      'container_class' => 'collapse navbar-collapse',
      'container_id' => 'navbarSupportContainer',
      'items_wrap' => '<ul class="navbar-nav ml-auto text-center">%3$s</ul>',
      'menu_class' => 'nav-item'
  )); ?>

<!-- Este será el Home con Jumbotron-->
 <div class="Home container-fluid img-fluid" id="Home">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
      
      <p class="display-2 text-dark">Desarrollo web</></p>
      <p class="lead text-dark"> En este sitio se presenta mi trabajo de Diseño Web. Todos los sitios sobre Bootstrap con diseño "Adaptativo".</p>
      <hr class="my-4">
      <p class="lead text-dark">El diseño de los sitios se realiza 100% sobre código HTML, CSS y JavasScript potenciado con Bootstrap y jQuery cuando es necesario.</p>
    </div>
   <div class="col-sm-1"></div>
  </div>
 </div>
<!-- Luego vendrá el About Me con Jumbotron-->
<div class="About container-fluid img-fluid" id="About">
   <div class = "row">
      <div class="col">
      <p class="display-4 text-right">Acerca de mi </p>
    </div>
    </div>
  <div class="row">
    <div class="col-sm-8">
      <p class="lead">Soy tecnologa  en analisis y desarrollo de sistemas de informaciondedicado al Diseño Web.</p>
      <p class="lead">Hace dos años que estoy estudiando distintos lenguajes de programación y a la fecha me desempeño bien en HTML, CSS, SASS, PUG, PHP y JavaScript. Mis diseños utilizan principalmente Bootsstrap por lo que se adaptan a cualquier dispositivo. Y mi objetivo es certificarme en Front-End tanto como en Back-End.</p>
    </div>
    <div class="col-sm-4">
      <figure class="figure">
  <img src="img/PerfilTW.jpeg" class="figure-img img-fluid rounded" alt="Mi foto.">
  <figcaption class="figure-caption text-dark">Este soy yo, posando para la foto.</figcaption>
</figure>
    </div>
  </div>
</div>