<?php
/**
 * Single template file
 *
 *
 * @package WordPress
 * @subpackage Afm
 * @since Afm 1.0
 */

get_header();
?>

    <div id="main-site" class="containter-fluid">
        
        <div class="row col-md-12" style="padding:10px;">

            <div class="col-md-12">

                <?php
                    if(have_posts()) {

                        while(have_posts()) {

                            the_post();
                            ?>
                                <h2 class="text-center">
                                    <?php echo get_the_title(); ?>
                                </h2>
                                
                                <div class="container">
                                    <?php echo get_the_content(); ?>
                                </div>
                            <?
                        }

                    }
                ?>

            </div>            

        </div>

    </div>

<?php
get_footer();
