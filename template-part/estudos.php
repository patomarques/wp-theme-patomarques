<?php
  // $current = get_template_part( 'sobre' );
  // print_r($current);
  $page = get_page_by_path('estudos');
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
  </div>
</section>
