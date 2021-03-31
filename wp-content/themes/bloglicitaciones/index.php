<?php get_header(); ?>
<!-- Portafolio, con Cards -->
  <div class="Portafolio container-fluid bg-secondary" id="Portafolio"> 
    <div class = "row">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="col">
      <h4 class="display-4 text-right"><?php the_title(); ?></h4>
    </div>
    </div>
    <div class="row align-items-top align-self-center">
      <div class="col-sm-4">
        <div class="card" style="width:100%;">
        <a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail() ) {
          the_post_thumbnail('post-thumbnails', array('class' => 'card-img-top' ));
        } ?></a>
        <div class="card-body">
          <p class="card-text"><?php the_excerpt(); ?></p>
        </div>
      </div>
    </div>
  </div> 
</div> 
<?php endwhile; endif; ?> 
<!----- Fin del portafolio---->
<?php get_footer(); ?>