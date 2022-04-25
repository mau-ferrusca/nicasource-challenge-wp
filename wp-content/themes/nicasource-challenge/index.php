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
    <div class="col-lg-9">
      <!-- WP Loop -->
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <!-- post body-->
      <div class="card-body">
        <a href="<?php the_permalink(); ?>">
          <h2><?php the_title(); ?></h2>
        </a>
        <p class="small mb-0">Fecha: <?php the_time('F j, Y'); ?></p>
        <p class="small mb-0">Autor: <?php the_author(); ?></p>
        <p class="small">Categorías: <?php the_category(',', $parents, $post_id) ?> / Etiquetas:
          <?php the_tags('', '/', ''); ?></p>
        <!-- <img src="https://picsum.photos/1200/300" alt="Img placeholder" class="img-fluid mb-3"> -->
        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('post_thumbnail', array(
                                'class' => 'img-fluid mb-3'
                            ));
                        }
                        ?>

        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Más info...</a>
      </div>

      <?php
                endwhile;
            endif;
            ?>

      <!-- pagination -->
      <div class="card-body">
        <?php get_template_part('template-parts/content', 'pagination');
                ?>
      </div>
    </div>
    <!-- aisde -->
    <?php get_sidebar(); ?>
  </div>
</div>
<!-- blog end --><?php get_footer(); ?>