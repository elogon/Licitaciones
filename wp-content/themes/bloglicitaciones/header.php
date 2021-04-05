<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
    <link rel="stylesheet"  href="/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--  style -->
    <link rel="stylesheet" href="style.css">
  <title><?php wp_title(); ?></title>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <!-- Encabezado de la página -->
  <header>

      <!-- Esta separación de las etiquetas es para describir con mas comodidad el significado de cada elemento -->
      <h1>
        <a href="<?php echo esc_url( home_url() ); ?>" >

        <?php bloginfo( 'name' ); ?>

        </a>
        
      </h1>


     <!-- Se crea una variable con la descripción de la página -->
    <?php $description = bloginfo( 'description' ); ?>

    <!-- Comprueba que la variable tenga un valor o si existe una vista previa en el personalizador  respectivamente-->
    <?php if ( $description || is_customize_preview() ) : ?>

    <!-- De ser verdadero muestra la descripción de la página -->
    <?php echo $description; ?>

  <?php endif; ?>

  <?php wp_nav_menu(array(
  'theme_location' => 'primero',
  'container'      => 'nav')); 
  ?>
  <?php get_header(); ?>

</header>
<?php get_footer(); ?>