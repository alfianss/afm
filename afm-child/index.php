<?php
/**
 * The main template file
 *
 *
 *
 * @package WordPress
 * @subpackage Afm Child
 * @since Afm Child 1.0
 */

get_header();
?>

    <div id="main-site" class="containter-fluid">
        
        <div class="row col-md-12">

            <div class="col-md-8">

                <?php
                if( is_front_page() || is_home() ) {

                    if(have_posts()) {

                        while(have_posts()) {

                            the_post();
                            ?>
                            <div class="card mb-2" >

                                <div class="card-header">
                                    <h2 class="text-center"><?php echo get_the_title(); ?></h2>
                                </div>

                                <div class="card-body">
                                    <span><?php echo get_the_content(); ?></span>
                                </div>
                            
                            </div>
                                
                            <?
                        }

                    }
                
                }
                ?>

            </div>

            <div class="col-md-4">
                
                <?php get_sidebar(); ?>

            </div>

        </div>

    </div>

<?php
get_footer();
