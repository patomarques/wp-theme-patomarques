<?php
  $page = get_page_by_path('contato');

  $args = array( 'post_type' => 'contato', 'posts_per_page' => -1 );
  $contatos = new WP_Query( $args );
?>

<section class="container-fluid section">
  <div class="container">
    <div class="row text-center hidden">
      <div class="col-12">
        <h3 class="title">
          <?= $page->post_title ?>
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <ul class="list-inline list-unstyled contact-list">

          <?php while ( $contatos->have_posts() ) : $contatos->the_post(); ?>

            <li class="list-inline-item contact-list__item">
              <a href="<?= get_post_meta(get_the_ID(), 'link', true) ?>" alt="<?= get_the_title() ?>"
              title="<?= get_the_title() ?>" rel="noopener noreferrer" class="contact-list__link">
                <i class="<?= get_post_meta(get_the_ID(), 'icon-class', true) ?>"></i>
              </a>
            </li>

          <?php endwhile;
            wp_reset_postdata();
          ?>

        </ul>
      </div>
    </div>
  </div>
</section>
