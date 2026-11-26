</main><!-- #main-content -->

<footer class="site-footer">
	<div class="site-footer__inner">

		<div class="site-footer__col site-footer__brand">
			<p class="site-footer__title"><?php bloginfo( 'name' ); ?></p>
			<p class="site-footer__text">
				<?php esc_html_e( 'A small web studio building websites, apps and online stores for growing businesses.', 'pixelcraft' ); ?>
			</p>
		</div>

		<nav class="site-footer__col" aria-label="<?php esc_attr_e( 'Footer', 'pixelcraft' ); ?>">
			<p class="site-footer__title"><?php esc_html_e( 'Explore', 'pixelcraft' ); ?></p>
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

		<div class="site-footer__col">
			<p class="site-footer__title"><?php esc_html_e( 'Follow us', 'pixelcraft' ); ?></p>
			<ul class="social-links">
				<li>
					<a href="#" rel="noopener">
						<span class="screen-reader-text"><?php esc_html_e( 'Pixelcraft on', 'pixelcraft' ); ?></span>LinkedIn
					</a>
				</li>
				<li>
					<a href="#" rel="noopener">
						<span class="screen-reader-text"><?php esc_html_e( 'Pixelcraft on', 'pixelcraft' ); ?></span>GitHub
					</a>
				</li>
				<li>
					<a href="#" rel="noopener">
						<span class="screen-reader-text"><?php esc_html_e( 'Pixelcraft on', 'pixelcraft' ); ?></span>Instagram
					</a>
				</li>
			</ul>
		</div>

	</div>

	<div class="site-footer__bottom">
		<p>
			&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
			<?php bloginfo( 'name' ); ?>.
			<?php esc_html_e( 'All rights reserved.', 'pixelcraft' ); ?>
		</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>