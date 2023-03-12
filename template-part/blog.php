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

          <img src="<?= the_post_thumbnail_url() ?>" alt="<?php the_title() ?>"
            class="img-responsive">
          <h3 class="post-title"><?php the_title(); ?></h3>
          <?php //print_r(get_categories());  ?>

          <ul class="post-categories-list list-inline">

            <?php
              //$taxonomy = 'category';
              // ID Gets which assign post
              //$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
              //$separator_link = ', ';
              $categories = wp_get_post_categories( $post->ID );
              print_r($categories);

              foreach( $categories as $category ) {
            ?>

              <li class="post-categories__item list-inline-item">
                <a href="#" class="post-categories__link">
                  <?php print_r(get_the_category( $category )); ?>
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
    <div class="row">
      <div class="col-12 text-center">
        <button class="btn btn-secondary btn-read-more">Continue Vendo...</button>
      </div>
    </div>
  </div>
</section>
