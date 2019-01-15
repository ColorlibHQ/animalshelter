<?php 
/**
 * @Packge     : Animalshelter
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
// Block direct access
if( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

/**
 * Footer Area
 *
 * @Footer
 * @Back To Top Button
 *
 * @Hook animalshelter_footer
 *
 * @Hooked  animalshelter_footer_area 10
 * @Hooked  animalshelter_back_to_top 20 
 *
 */

do_action( 'animalshelter_footer' );

wp_footer(); 
?>
</body>
</html>