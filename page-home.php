<?php
/*
Template Name: Home
*/
get_header();

$defaults = array(
  'child_of'     => 0,
  'sort_order' => 'ASC',
  'sort_column' => 'menu_order',
  'post_type'    => 'page',
  'post_status'  => 'publish'
);
$pages = get_pages($defaults);
?>

<?php get_template_part( 'template-part/intro-fullscreen' ); ?>

<?php foreach ( $pages as $page ) { ?>
  <?php get_template_part( 'template-part/' . $page->post_name ); ?>
<?php } ?>

<?php get_footer(); ?>
