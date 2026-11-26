<?php
/**
 * Template Name: Full Width
 * Template Post Type: page
 *
 * Full-width template for Elementor pages: no container, no page title,
 * no sidebar. Header and footer come from the theme.
 *
 * @package Pixelcraft
 */

get_header();
?>

<?php
while ( have_posts() ) :
	the_post();
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'page-content page-content--full' ); ?>>
		<?php the_content(); ?>
	</article>
<?php endwhile; ?>

<?php
get_footer();