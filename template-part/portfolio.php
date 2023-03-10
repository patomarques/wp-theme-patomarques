<?php
  $page = get_page_by_path('portfolio');

  $args = array( 'post_type' => 'portfolio', 'posts_per_page' => -1 );
  $portfolio = new WP_Query( $args );
?>
<section class="container-full section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
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


    </div>
  </div>
  <div class="content-portfolio row">
    <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>

      <div class="col-12 col-md-4 p-0">
        <?= get_the_title() ?>
        <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" title="<?= get_the_title() ?>" class="img-fluid">
      </div>

    <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </div>
</section>
