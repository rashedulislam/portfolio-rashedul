<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rashedul\'s_PortFolio
 */

?>
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'wp_body_open' );  ?>

<div id="page" class="site">
	<div class="site-inner">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rashedul_islam' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
			   <div class="site-branding">

          <?php rashedul_islam_the_custom_logo(); ?>

          <div class="site-branding-text">
            <?php if ( is_front_page() && is_home() ) : ?>
              <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php else : ?>
              <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php endif; ?>

            <?php $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) : ?>
                <p class="site-description"><?php echo $description; ?></p>
              <?php endif; ?>
          </div><!-- .site-branding-text -->

        </div><!-- .site-branding -->
				<?php get_template_part( 'template-parts/navigation/navigation', 'primary' ); ?>
			</div><!-- .site-header-main -->
		</header><!-- #masthead -->
