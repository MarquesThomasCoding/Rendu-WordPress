<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ping-passion
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- <?php wp_body_open(); ?> -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ping-pas' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
				<a href="./index.php">
					<?php
					// Obtenir le champ image
					$logo = get_field('logo', 'option');

					// Afficher l'image
					if ($logo) {
						echo '<img class="logo" src="' . $logo['url'] . '" alt="' . $logo['alt'] . '">';
					}
					?>
				</a>
				<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
				<?php
			$ping_pas_description = get_bloginfo( 'description', 'display' );
			if ( $ping_pas_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $ping_pas_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header-menu',
					'menu_id'        => 'header-menu',
					'menu_class'     => 'header-menu',
					'menu_container' => 'nav',
				)
			);
		?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
