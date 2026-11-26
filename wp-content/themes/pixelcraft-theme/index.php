<?php
/**
 * Main fallback template.
 *
 * @package Pixelcraft
 */

get_header();
?>

<div class="container">
	<?php if ( have_posts() ) : ?>

		<?php if ( is_home() && ! is_front_page() ) : ?>
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		<?php endif; ?>

		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div>
			</article>
		<?php endwhile; ?>

		<?php the_posts_pagination(); ?>

	<?php else : ?>
		<h1><?php esc_html_e( 'Nothing found', 'pixelcraft' ); ?></h1>
		<p><?php esc_html_e( 'Sorry, no content matched your request.', 'pixelcraft' ); ?></p>
	<?php endif; ?>
</div>

<?php
get_footer();