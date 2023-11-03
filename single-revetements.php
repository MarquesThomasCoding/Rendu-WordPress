<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ping-passion
 */

$caracteristiques = get_fields();

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>
			
			<div class="single-card-revetement">
				<?php the_post_thumbnail(); ?>
				<div class="single-card-revetement__content">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
					<ul class="caracteristiques">
						<li>Rapidité : <?= $caracteristiques['rapidite']; ?></li>
						<li>Contrôle : <?= $caracteristiques['controle']; ?></li>
						<li>Adhérence : <?= $caracteristiques['adherence']; ?></li>
						<li>Epaisseur : 
							<ul>
								<?php foreach($caracteristiques['epaisseur'] as $carac) { echo "<li>".$carac."</li>"; } ?>
							</ul>
						</li>
					</ul>
				</div>
			</div>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php
get_footer();
