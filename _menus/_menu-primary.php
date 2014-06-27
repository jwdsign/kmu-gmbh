<?php 
	wp_nav_menu( array( 
    'theme_location' 	=> 'primary',
    'menu_class' 		=> 'flexnav',
    'container'			=> false,
    'items_wrap' 		=> '<ul data-breakpoint="800" id="%1$s" class="%2$s">%3$s</ul>',
    ));
?>