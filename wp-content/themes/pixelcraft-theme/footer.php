</main><!-- #main-content -->

<footer class="site-footer" role="contentinfo">
	<div class="site-footer__inner">
		<nav aria-label="<?php esc_attr_e( 'Footer', 'pixelcraft' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'container'      => false,
					'menu_class'     => 'menu',
					'depth'          => 1,
					'fallback_cb'    => false,
				)
			);
			?>
		</nav>
		<p class="site-footer__copy">
			&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
			<?php bloginfo( 'name' ); ?>.
			<?php esc_html_e( 'All rights reserved.', 'pixelcraft' ); ?>
		</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>