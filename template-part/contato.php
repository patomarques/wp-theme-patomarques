<?php
  $page = get_page_by_path('contato');

  $args = array( 'post_type' => 'contato', 'posts_per_page' => -1 );
  $contatos = new WP_Query( $args );
?>

<section class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="title-section">
          <?= $page->post_title ?>
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <?php while ( $contatos->have_posts() ) : $contatos->the_post(); ?>
          <a href="#" alt="<?= get_the_title() ?>" title="<?= get_the_title() ?>" rel="noopener noreferrer">
            <span class="icon">ICONE</span>
          </a>
        <?php endwhile;
          wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</section>
