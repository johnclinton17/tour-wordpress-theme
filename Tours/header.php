<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/images/favicon-16x16.png">
<link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico"> -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
	<!-- Header Section -->
  <header id="site_header" class="navbar-static-top">
      <div class="container">
          <div class="row">
              <div class="navbar-header">
                  <div class="logo">
                     <?php if ( get_theme_mod( 'm1_logo' ) ) : ?>
		      		<a href="<?php echo esc_url( home_url( '/' )); ?>" class="site-logo"><img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="<?php esc_url(bloginfo('name')); ?>" /></a>
		       <?php else: ?>
		        	<a href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a><br>
		      <?php endif; ?>
                    </div>
                </div>
               <!--  <div class="nav-top-bar mobile">
            		<?php
			            wp_nav_menu( array(
			                'theme_location'    => 'top-bar',
			                'depth'             => 3,
			                'container'         => '',
			                'container_class'   => '',
			                'menu_class'        => 'nav navbar-nav')
			            );
			        ?>
            	</div> -->
                <button type="button" data-toggle="collapse" data-target=".navbar-collapse " class="navbar-toggle" onclick="openNav()">
		          <span class="sr-only"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		        </button>

                <nav class="collapse navbar-collapse " role="navigation">
                	<div class="nav-top-bar">
                		<?php
				            wp_nav_menu( array(
				                'theme_location'    => 'top-bar',
				                'depth'             => 3,
				                'container'         => '',
				                'container_class'   => '',
				                'menu_class'        => 'nav navbar-nav')
				            );
				        ?>
                	</div>
                	<div class="primary-menu">
				        <?php
				            wp_nav_menu( array(
				                'theme_location'    => 'primary',
				                'depth'             => 3,
				                'container'         => '',
				                'container_class'   => '',
				        		'container_id'      => 'navbar-collapsed',
				                'menu_class'        => 'nav navbar-nav',
				                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                'walker'            => new wp_bootstrap_navwalker())
				            );
				        ?>
				    </div>
				</nav>
            </div>  
        </div>
    </header>
    <div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <nav class="mobile-menu" role="navigation">
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary',
                'depth'             => 3,
                'container'         => '',
                'container_class'   => '',
        		'container_id'      => 'navbar-collapsed',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
		</nav>
	</div>


<!-- End -->
	<div id="content" class="site-content">
		<div class="container-fluid">
			<div class="row">
