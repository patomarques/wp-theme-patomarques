		</main>

		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<a href="/" class="footer-copyfight">
              <?= get_bloginfo( 'name', 'display' ) ?>
              <i class="fa-solid fa-flag"></i>
              <?= date_i18n( 'Y' ) ?>
					</div>

					<?php
						if ( has_nav_menu( 'footer-menu' ) ) : // See function register_nav_menus() in functions.php
							wp_nav_menu(
								array(
									'container'       => 'nav',
									'container_class' => 'col-md-6',
									//'fallback_cb'     => 'WP_Bootstrap4_Navwalker_Footer::fallback',
									'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
									'theme_location'  => 'footer-menu',
									'items_wrap'      => '<ul class="menu nav justify-content-end">%3$s</ul>',
								),
							);
						endif;
					?>

				</div>
			</div>
		</footer>
	</div>

  <a href="https://www.flaticon.com/free-icons/duck" title="duck icons" class="hidden">
    Duck icons created by smalllikeart - Flaticon
  </a>

	<?php
		wp_footer();
	?>
</body>
</html>
