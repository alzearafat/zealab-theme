<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package zealab
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- AVATAR GETTER VALUE -->
    <?php
        $titan = TitanFramework::getInstance( 'zealab-theme' );
        
        $imageID = $titan->getOption( 'upload_avatar' );

        $imageSrc = $imageID; // For the default value
        if ( is_numeric( $imageID ) ) {
            $imageAttachment = wp_get_attachment_image_src( $imageID );
            $imageSrc = $imageAttachment[0];
        }
    ?>
    <!-- END OF CODE -->

	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'zealab' ); ?></a>
			<div class="container">
				<div class="row">
					<div class="twelve columns">
					<header id="masthead" class="site-header" role="banner">
						<div class="site-branding">
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src='<?php echo esc_url( $imageSrc ); ?>' /></a></h1>
							<h2 class="site-description"><?php // bloginfo( 'description' ); ?></h2>
						</div><!-- .site-branding -->

						<nav id="site-navigation" class="main-navigation" role="navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php // _e( 'Primary Menu', 'zealab' ); ?></button>
							<?php // wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					</header><!-- #masthead -->
				</div>
			</div>
	</div>

		<div id="content" class="site-content">
