		</main>

		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<p><?php printf( esc_html__( ' %1$s &copy; %2$s', 'wp_patomarques_child' ), date_i18n( 'Y' ), get_bloginfo( 'name', 'display' ) ); ?></p>
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
