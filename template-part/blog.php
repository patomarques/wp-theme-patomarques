<?php
  $lastPosts  = get_posts(
    array(
      'posts_per_page' => 3
    )
  );

?>

<section class="container-fluid section section-posts">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="title">Blog</h2>
      </div>
    </div>
    <div class="row">
      <?php
        foreach ( $lastPosts as $post ) :
          setup_postdata( $post );
      ?>
        <div class="col-12 col-md-4">

          <div class="post-thumb">
            <img src="<?= the_post_thumbnail_url() ?>" alt="<?php the_title() ?>"
              class="post-thumb__img img-responsive">
          </div>

          <h3 class="post-title"><?php the_title(); ?></h3>

          <ul class="post-categories-list list-inline">

            <?php
              $post_categories = wp_get_post_categories( $post->ID );

              foreach($post_categories as $c){
                $cat = get_category( $c );
            ?>

              <li class="post-categories__item list-inline-item">
                <a href="/<?= $cat->slug ?>" class="post-categories__link">
                  <?= $cat->name ?>
                </a>
              </li>

            <?php } ?>

          </ul>
        </div>
      <?php
        endforeach;
        wp_reset_postdata();
      ?>
    </div>
    <div class="row mt-5">
      <div class="col-12 text-center">
        <button class="btn btn-secondary btn-read-more">Continue Vendo...</button>
      </div>
    </div>
  </div>
</section>
