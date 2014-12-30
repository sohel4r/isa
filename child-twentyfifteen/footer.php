
<!-- Footer  -->
<div class="container">
  <div class="row">
	<footer class="footer">
		<div class="col-sm-12 hidden-xs footerMenu">		
				<?php

				$footer = array(
					'theme_location'  => 'footer',
					'menu'            => 'main',
					'container'       => false,
					'menu_class'      => 'footerTop',
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

				wp_nav_menu( $footer );

				?>
		</div>
		<div class="col-sm-12 footerCopy">
				<?php

				$footer1 = array(
					'theme_location'  => 'footer',
					'menu'            => 'main',
					'container'       => false,
					'menu_class'      => 'footerbottom',
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

				wp_nav_menu( $footer1 );

				?>
		</div>
	</footer>
  </div>
</div>
	<?php wp_footer(); ?>
  </body>
</html>