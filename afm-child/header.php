<?php
/**
 * Header template file
 *
 *
 * @package WordPress
 * @subpackage Afm Child
 * @since Afm Child 1.0
 */

?>
<html>

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">

		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

        <title> <?php bloginfo( 'name' ); ?> </title>

        <?php wp_head(); ?>

    </head>
    
    <body>

    <nav class="nav">

        <?php
        wp_nav_menu( 
            array( 'theme_location' => 'header-menu', 'menu_class'=> 'menu nav', 'container' => 'div', 'items_wrap' => '<ul id="%1$s" class="%2$s nav-link">%3$s</ul>' )
        );
        ?> 

    </nav>
        
        