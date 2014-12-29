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
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<header id="masthead" class="site-header" role="banner">
					<div class="col-sm-3">
						<div class="site-branding">
							<?php if ( get_header_image() ) : ?>
							<div id="site-header">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
								</a>
							</div>
							<?php endif; ?>
						</div><!-- .site-branding -->						
					</div>		<!-- End logo -->		    
					<div class="col-sm-9">
						<div class="col-sm-12">
							<div class="lang col-sm-4 col-sm-offset-3">
								<?php the_widget('PLL_Widget_Languages','dropdown=1'); ?>
							</div>	
							<div class="search col-sm-5">
								<?php if(function_exists('child_search_form')){ echo child_search_form(); } ?>
							</div>													
						</div>
						<div class="col-sm-12">
				<nav class="navbar navbar-default pull-right">			
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">ISA Menu</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				    </div>			
				<?php

				$defaults = array(
					'theme_location'  => 'primary',
					'menu'            => 'main',
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navigation',
					'menu_class'      => 'nav navbar-nav',
					'menu_id'         => 'maniNavigation',
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
				</header><!-- .site-header -->
		</div><!-- End col-sm-12 -->
		</div><!-- End container -->
	</div><!-- .header -->
<div class="clearfix"></div>
	<div id="content" class="container site-content">
