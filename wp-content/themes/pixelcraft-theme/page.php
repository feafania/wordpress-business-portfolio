<?php
/**
 * Template for static pages.
 *
 * @package Pixelcraft
 */

get_header();
?>

<?php
while ( have_posts() ) :
	the_post();
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'page-content' ); ?>>
		<?php the_content(); ?>
	</article>
<?php endwhile; ?>

<?php
get_footer();