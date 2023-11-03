<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ping-passion
 */

get_header();
?>

	<main id="primary" class="site-main main-revetements">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h2>Les revêtements</h2>
			</header><!-- .page-header -->

			<section class="revetements-wrapper">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>
	
				<article class="revetement-card">
					<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
					<div class="revetement-card__content">
						<h2><?php the_title(); ?></h2>
					</div>
					</a>
				</article>
	
			<?php endwhile; ?>

			</section>

			<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
