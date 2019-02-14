<?php 
/**
 * @Packge     : Animalshelter Companion
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

if( ! defined( 'WPINC' ) ) {
    die;
}


// Car Bokking scripts enqueue
add_action( 'admin_enqueue_scripts', 'animalshelter_volunteer_scripts' );
function animalshelter_volunteer_scripts() {
    wp_enqueue_style( 'volunteer-style', ANIMALSHELTER_COMPANION_DIR_URL . 'css/booking.css', array(), '1.0', false );
    wp_enqueue_script( 'volunteer-script', ANIMALSHELTER_COMPANION_DIR_URL . 'js/booking.js', array('jquery'), '1.0', true );
}


// Register car volunteer post type
function animalshelter_custom_init() {
    $args = array(
      'public' => false,
      'label'  => esc_html__( 'Volunteer', 'animalshelter-companion' )
    );
    register_post_type( 'volunteer', $args );
}
add_action( 'init', 'animalshelter_custom_init' );

// remove post type menu
function animalshelter_remove_menu_items() {

    remove_menu_page( 'edit.php?post_type=volunteer' );

}
add_action( 'admin_menu', 'animalshelter_remove_menu_items' );

// Add admin menu for car volunteer list
add_action( 'admin_menu', 'animalshelter_admin_menu' );

function animalshelter_admin_menu() {
    add_menu_page( esc_html__( 'Volunteer Lists', 'animalshelter-companion' ), esc_html__( 'Volunteer', 'animalshelter-companion' ), 'manage_options', 'animalshelter-volunteer', 'animalshelter_booking_admin_page', '
dashicons-calendar-alt', 6  );
}

// Car booking admin page
function animalshelter_booking_admin_page() {
?>
    <div class="booking-area booking-lists" style="display:block;">
        <?php animalshelter_booking_lists(); ?>
    </div>

<?php

}

// Booking List
function animalshelter_booking_lists() {
    $args = array(
        'post_type'     => 'volunteer',
        'posts_per_page' => '-1'
    );

    $booking_lists = get_posts( $args );


    
    echo '<div class="booking-list"><ul class="text-center">';
    echo '<h2 style="text-align:center;">Volunteer Application List</h2>';

    animalshelter_delete_booking();
    //
    echo '<li class="voltbl-heading" style="padding: 8px;background-color:#f8f8f8;"><span><strong>Name</strong></span><span><strong>City</strong></span><span style="float:right;"><strong>Action</strong></span></li>';
    foreach( $booking_lists as $list ) {

    $vdata = get_post_meta( $list->ID, 'animalshelter_volunteer', true );

    $vdata = unserialize( $vdata );

    echo '<li class="voltbl-rows" style="padding: 8px;background-color:#f8f8f8;"><span>'.esc_html( $vdata[0]['value'] ).'</span><span>'.esc_html( $vdata[3]['value'] ).'</span><span style="float:right;"><button class="view-booking" data-target="modal-'.esc_attr( $list->ID ).'" >'.esc_html__( 'View', 'animalshelter-companion' ).'</button></span>'.animalshelter_booking_admin_modal( $list->ID ).'</li>';
   
        
    }
    echo '</ul></div>';

    ?>
    <script>
        ( function( $ ) {

            $( '.view-booking' ).on( 'click', function() {

                var modal = $(this).attr( 'data-target' );

                $('.' + modal ).show();

            });

            $( '.close-btn' ).on( 'click', function() {

                var modal = $(this).parent();

                $( modal ).hide();

            });

        } )( jQuery );
    </script>
    <?php
}
    
// Booking view modal
function animalshelter_booking_admin_modal( $id ) {


    $vdata = get_post_meta( $id, 'animalshelter_volunteer', true );

    $vdata = unserialize( $vdata );

    
?>
    <div class="booking-modal modal-<?php echo esc_attr( $id ); ?>" style="position:absolute;top:0;background-color:#0003;top:0;bottom:0;left:0;right:0;display:none;">
        <div class="close-btn"><?php esc_html_e( 'Close', 'animalshelter-companion' ) ?></div>
        <div style="background-color: #f9f9f9;padding: 10px;max-width: 40%;margin: 0 auto;margin-top: 10%;">

            <h3 class="text-center"><?php esc_html_e( 'Volunteer Info', 'animalshelter-companion' ) ?></h3>
            <ul class="modal-list">
                    <?php 
                    $Available_days = [];
                    $note = '';

                    foreach( $vdata as $val ){

                        if( $val['name'] != 'Available_days' && $val['name'] != 'Volunteer_Note' ) {

                            $name = str_replace( '_', ' ', $val['name'] );

                            echo '<li><strong>'.esc_html( $name ).': </strong>'.esc_html( $val['value'] ).'</li>';
                        }else {

                            if( $val['name'] != 'Volunteer_Note' ) {

                                $Available_days [] = $val['value'];

                            }else {
                                $note .= $val['value'];
                            }
                        }
                    }

                     echo '<li><strong>Available days: </strong>'.esc_html( implode( ', ', $Available_days ) ).'</li>';
                    ?>
                
                <p style="padding:10px"><?php echo esc_textarea( $note ) ?></p>
            </ul>
            <form action="#" method="post">
                <input type="hidden" name="bookingid" value="<?php echo absint( $id ) ?>" >
                <button name="deletebooking" class="deletebooking" type="submit"><?php esc_html_e( 'Delete', 'animalshelter-companion' ) ?></button>                
            </form>
        </div>
    </div>
<?php
}

// Booking Form Data 
add_action( 'wp_ajax_animalshelter_booking_form_data' , 'animalshelter_booking_form_data');
add_action( 'wp_ajax_nopriv_animalshelter_booking_form_data', 'animalshelter_booking_form_data');

function animalshelter_booking_form_data() {

    $error = new WP_Error();

        $args = array(
            'post_type'     => 'volunteer',
            'post_title'    => sanitize_text_field( $username ),
            'post_status'   => 'publish',
        );

        $insert_ID = wp_insert_post( $args );

        $data = serialize( $_POST['data'] ) ;


        if( $insert_ID ) {

        update_post_meta( $insert_ID, 'animalshelter_volunteer', $data );


        echo '<div class="alert alert-info">Your submission successfully done.</div>';

        }else{
            echo '<div class="alert alert-danger">Illegal submissions. Please try again</div>';
        }



   die();

}
// Delete Booking 
function animalshelter_delete_booking() {

    if ( isset( $_POST['deletebooking'] ) && isset( $_POST['bookingid'] ) ) {
        $delete = wp_delete_post( absint( $_POST['bookingid'] ) );

        if( $delete ) {
            echo '<h4 style="text-align:center;">'.esc_html__( 'Successfully Deleted', 'animalshelter-companion' ).'</h4>';
        }

    }
    
}
