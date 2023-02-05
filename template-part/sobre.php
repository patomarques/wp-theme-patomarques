<?php
  $page = get_page_by_path('sobre');
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
