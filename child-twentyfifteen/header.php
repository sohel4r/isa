<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>(function(){document.documentElement.className='js'})();</script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    
    <!-- Heading -->
	<div class="container topheading">
		<div class="row">
			<div class="col-sm-3">
				<div class="logo">
				<?php if ( get_header_image() ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>	
				<?php endif; ?>
				</div>
			</div>
			<div class="col-sm-9">
				<div class="row search">
					<div class="col-sm-3 col-sm-offset-5">
						<?php the_widget('PLL_Widget_Languages','dropdown=1'); ?>					
					</div>
					  <div class="col-sm-4">
					    <div class="input-group wsearch">
							<?php if(function_exists('child_search_form')){ echo child_search_form(); } ?>
					    </div><!-- /input-group -->
					  </div><!-- /.col-lg-6 -->					
				</div>
				<div class="row">
					<div class="col-sm-12">
						<nav class="topNavigation navbar-right">
							<label for="show-menu" class="show-menu">Show Menu</label>
							<input type="checkbox" id="show-menu" role="button">
				<?php

				$defaults = array(
					'theme_location'  => 'primary',
					'menu'            => 'main',
					'container'       => false,
					'menu_class'      => 'topNavigation',
					'menu_id'         => 'menu',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);

				wp_nav_menu( $defaults );

				?>
						</nav>						
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- End heading -->

    <!-- Main Container -->
	<div class="container warp">
		<div class="row">
