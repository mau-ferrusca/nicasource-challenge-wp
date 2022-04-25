<div class="col-lg-3">
  <!-- <div class="card-body">
    <h4>Publicidad</h4>
    <hr>
    <img src="https://picsum.photos/300/900" alt="" class="img-fluid">
  </div>
</div> -->
  <?php if ( is_active_sidebar( 'nicasource-sidebar' ) ) : ?>
  <?php dynamic_sidebar( 'nicasource-sidebar' ); ?>
  <?php else : ?>
  <!-- Time to add some widgets! -->
  <?php endif; ?>
</div>