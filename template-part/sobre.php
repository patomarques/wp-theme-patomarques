<?php
  $page = get_page_by_path('sobre');
  $thumbs = wp_get_attachment_image_src(get_post_thumbnail_id( $page->ID ), 'post')[0];
?>
<section class="container-fluid section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h3 class="title"><?= $page->post_title ?></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-4">
        <div class="img-bg-effect">
        <img src="<?= $thumbs?>" alt="<?= $page->post_title ?>" class="img-responsive img-fluid">
        </div>
      </div>
      <div class="col-12 col-md-8">
        <div class="section__content-text text-justify">
          <p><?php echo get_post_meta($page->ID, 'resume', true); ?></p>
          <?//= $page->post_content ?>
        </div>
      </div>
    </div>
  </div>
</section>
