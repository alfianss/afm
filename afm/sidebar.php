<?php
/**
 * Sidebar template file
 *
 *
 * @package WordPress
 * @subpackage Afm
 * @since Afm 1.0
 */

$has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
$has_sidebar_2 = is_active_sidebar( 'sidebar-2' );

if($has_sidebar_1) {
    
    ?>
    
    <div id="sidebar-1" class="sidebar">

    <?php 
        do_action( 'before_sidebar' );    
        dynamic_sidebar( 'sidebar-1' );
    ?>

    </div>
    
    <?php
} 

if($has_sidebar_2) {

    ?>
        <div id="sidebar-2" class="sidebar">
    
    <?php 
        do_action( 'before_sidebar' );
        dynamic_sidebar( 'sidebar-2' );
    ?>
    
        </div>
    <?php
}