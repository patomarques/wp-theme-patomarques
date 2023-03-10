<?php
  $page = get_page_by_path('portfolio');

  $args = array( 'post_type' => 'portfolio', 'posts_per_page' => -1 );
  $portfolio = new WP_Query( $args );
?>
<section class="container-fluid section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="title"><?= $page->post_title ?></h3>
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
        <?php while ( $portfolio->have_posts() ) : $portfolio->the_post();
          echo get_the_title();
          endwhile;
          wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</section>
