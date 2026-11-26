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

	$built_with_elementor = class_exists( '\Elementor\Plugin' )
		&& \Elementor\Plugin::$instance->documents->get( get_the_ID() )
		&& \Elementor\Plugin::$instance->documents->get( get_the_ID() )->is_built_with_elementor();
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'page-content' ); ?>>
		<?php if ( ! $built_with_elementor ) : ?>
			<div class="container">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		<?php else : ?>
			<?php the_content(); ?>
		<?php endif; ?>
	</article>
<?php endwhile; ?>

<?php
get_footer();