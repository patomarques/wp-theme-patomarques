<?php
  $page = get_page_by_path('habilidades');

  $args = array( 'post_type' => 'habilidades', 'posts_per_page' => -1, 'orderby' => 'order', 'order' => 'ASC' );
  $skills = new WP_Query( $args );
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
      <div class="col-12 col-lg-6">
        <div class="row content-skills">

          <?php while ( $skills->have_posts() ) : $skills->the_post(); ?>

          <?php if(get_post_meta(get_the_ID(), 'category-graph', true) == 'bar'){ ?>

            <div class="col-12 col-md-6 content-skills__bars">
              <div class="content-skills__line">
                <div class="text-center"><?= get_the_title() ?></div>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated progress-bar-custom" role="progressbar" aria-label="Basic example" style="width: <?= get_post_meta(get_the_ID(), 'percent', true) ?>%" aria-valuenow="<?= get_post_meta(get_the_ID(), 'percent', true) ?>" aria-valuemin="0" aria-valuemax="100"><?= get_post_meta(get_the_ID(), 'percent', true) ?>%</div>
                </div>
              </div>
            </div>

          <?php } ?>

          <?php
            endwhile;
            wp_reset_postdata();
          ?>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <?php while ( $skills->have_posts() ) : $skills->the_post(); ?>

        <?php if(get_post_meta(get_the_ID(), 'category-graph', true) == 'circle'){ ?>

          <?= get_the_title() ?>
          <?= get_post_meta(get_the_ID(), 'percent', true) ?>

        <?php } ?>

        <?php
            endwhile;
            wp_reset_postdata();
          ?>
      </div>
    </div>

  </div>
</section>
