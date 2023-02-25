<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri() ?>/assets/img/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri() ?>/assets/img/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri() ?>/assets/img/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="<?= get_stylesheet_directory_uri() ?>/assets/img/favicon_io/site.webmanifest">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700;900&family=Source+Sans+Pro:wght@300;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' );
	$navbar_position = get_theme_mod( 'navbar_position', 'static' );

	$search_enabled  = get_theme_mod( 'search_enabled', '1' );
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'wp_patomarques_child' ); ?></a>

<div id="wrapper">
	<header class="header hidden">
		<nav id="header" class="navbar navbar-expand-xs <?php echo esc_attr( $navbar_scheme ); if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php
						$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

						if ( ! empty( $header_logo ) ) :
					?>
						<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
					<?php
						else :
							echo esc_attr( get_bloginfo( 'name', 'display' ) );
						endif;
					?>
				</a>

			</div>
		</nav>
	</header>

  <input type="checkbox" id="main-navigation-toggle" class="btn btn--close" title="Toggle main navigation" />
  <label class="menu-hamburguer" for="main-navigation-toggle">
    <span></span>
  </label>

  <nav id="main-navigation" class="nav-main">
    <ul class="menu">
      <?php
        $menu = wp_get_nav_menu_items( 'main_menu',
          array(
            'order'                  => 'ASC',
		        'orderby'                => 'menu_order',
            'post_type'              => 'nav_menu_item',
            'post_status'            => 'publish',
          )
        );

        foreach($menu as $key => $item) {
      ?>
      <li class="menu__item">
        <a href="<?= $menu[$key]->url ?>" class="menu__link">
          <?= $menu[$key]->title ?>
        </a>
      </li>
      <?php } ?>
    </ul>
  </nav>

  <?php
    $navbarMargin = '';
    if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ){
      $navbarMargin = 'pt-100';
    } elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) {
      $navbarMargin = 'pb-100';
    }
  ?>

	<main id="main" class="<?= $navbarMargin ?>">
