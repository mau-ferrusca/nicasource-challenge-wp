<!-- header php file -->
<?php get_header(); ?>

<!-- blog start -->
<div class="container">
  <h2 class="my-5 text-center text-primary">
    <?php single_post_title(); ?>
  </h2>
  <hr>
  <div class="row">
    <!-- posts -->
    <div class="col-lg-12">
      <!-- WP Loop -->
      <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- post body-->
      <div class="card-body">
        <h2><?php the_title(); ?></h2>
        <p class="small mb-0">Fecha: <?php the_time('F j, Y'); ?></p>
        <p class="small mb-0">Autor: <?php the_author(); ?></p>
        <p class="small">Categorías: <?php the_category(',', $parents, $post_id) ?> / Etiquetas:
          <?php the_tags('', '/', ''); ?></p>
        <!-- <img src="https://picsum.photos/1200/300" alt="Img placeholder" class="img-fluid mb-3"> -->
        <?php
            if ( has_post_thumbnail()) {
                the_post_thumbnail('post_thumbnail', array(
                    'class' => 'img-fluid mb-3'
                ));
            }
        ?>
        <?php the_content(); ?>
      </div>

      <?php
        endwhile; 
        endif; 
        ?>

    </div>
  </div>
</div>
<!-- blog end -->
<?php get_footer(); ?>