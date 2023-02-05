<?php
  $page = get_page_by_path('habilidades');

  $args = array( 'post_type' => 'habilidades', 'posts_per_page' => -1 );
  $skills = new WP_Query( $args );
?>
<section class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3><?= $page->post_title ?></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="content-text">
          <?= $page->post_content ?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <?php while ( $skills->have_posts() ) : $skills->the_post();
          echo get_the_title();
          endwhile;
          wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</section>
