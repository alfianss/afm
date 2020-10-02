<?php
/**
 * Footer template file
 *
 *
 * @package WordPress
 * @subpackage Afm
 * @since Afm 1.0
 */

?>
    <footer>

        <div class="container-fluid">

            <div class="col-md-3">

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>

            </div>

            <div class="col-md-6"></div>

            <div class="col-md-3"></div>

        </div>

    </footer>

        <?php wp_footer(); ?>
        
    </body>

</html>
