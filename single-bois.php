<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ping-passion
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<div class="single-card-bois">
				<?php the_post_thumbnail(); ?>
				<div class="single-card-bois__content">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
				</div>
			</div>

		<?php endwhile; ?>

	</main><!-- #main -->

<?php
get_footer();
