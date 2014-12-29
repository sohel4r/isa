<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->
<div class="container">
	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="row">
		<div class="col-sm-12">
				<?php

				$footer = array(
					'theme_location'  => 'footer',
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

				wp_nav_menu( $footer );

				?>		
		</div><!-- End footer menu -->
	</div>
	<div class="row">
		<div class="col-sm-12">
				<?php

				$footer1 = array(
					'theme_location'  => 'footer',
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

				wp_nav_menu( $footer1 );

				?>
	</div>
	</footer><!-- .site-footer -->
</div>

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
