<?php if ( '1' === $search_enabled ){ ?>

<form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="input-group">
    <input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'wp_patomarques_child' ); ?>" title="<?php esc_attr_e( 'Search', 'wp_patomarques_child' ); ?>" />
    <button type="submit" name="submit" class="btn btn-outline-secondary"><?php esc_html_e( 'Search', 'wp_patomarques_child' ); ?></button>
  </div>
</form>

<?php } ?>
