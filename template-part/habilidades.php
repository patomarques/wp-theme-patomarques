<?php
  $page = get_page_by_path('habilidades');

  $args = array( 'post_type' => 'habilidades', 'posts_per_page' => -1 );
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
      <div class="col-12 col-md-6 content-skills">

        <?php while ( $skills->have_posts() ) : $skills->the_post(); ?>

        <div class="content-skills__line">
          <div class="text-center"><?= get_the_title() ?></div>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated progress-bar-custom" role="progressbar" aria-label="Basic example" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
          </div>
        </div>

         <?php
          endwhile;
          wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</section>
