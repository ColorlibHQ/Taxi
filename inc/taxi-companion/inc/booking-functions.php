<?php 
/**
 * @Packge     : Taxi Companion
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

if( ! defined( 'WPINC' ) ) {
    die;
}

// Car Bokking scripts enqueue
add_action( 'admin_enqueue_scripts', 'carrentals_booking_scripts' );
function carrentals_booking_scripts() {

    wp_enqueue_style( 'booking-style', TAXI_COMPANION_DIR_URL .'css/booking.css', array(), '1.0', false );

    wp_enqueue_script( 'repeater-script', TAXI_COMPANION_DIR_URL .'js/repeater.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'booking-script', TAXI_COMPANION_DIR_URL .'js/booking.js', array('jquery'), '1.0', true );
}

// Register car booking post type
function carrentals_custom_init() {
    $args = array(
      'public' => false,
      'label'  => esc_html__( 'Car Booking', 'taxi' )
    );
    register_post_type( 'carbooking', $args );
}
add_action( 'init', 'carrentals_custom_init' );

// remove post type menu
function carrentals_remove_menu_items() {

    remove_menu_page( 'edit.php?post_type=carbooking' );

}
add_action( 'admin_menu', 'carrentals_remove_menu_items' );

// Add admin menu for car booking list
add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
    add_menu_page( esc_html__( 'Car Booking Lists', 'taxi' ), esc_html__( 'Car Booking', 'taxi' ), 'manage_options', 'carrental-car-booking', 'carrental_booking_admin_page', '
dashicons-calendar-alt', 6  );
}

// Car booking admin page
function carrental_booking_admin_page() {
?>
  
    <div class="booking-settings-nav">
        <ul>
            <li class="tablist" ><?php esc_html_e( 'List', 'taxi' ); ?></li>
            <li class="tabsettings"><?php esc_html_e( 'Form Settings', 'taxi' ); ?></li>
        </ul>
    </div>


    <div class="booking-area booking-lists" style="display:block;">
        <?php carrental_booking_lists(); ?>
    </div>
    <div class="booking-area booking-settings" style="display:none">
        <?php
        // Form handling
        carrental_booking_settings_form_data(); 
        // Form
        carrental_booking_settings_form();
        ?>

    </div>

<?php

}

// Booking settings form
function carrental_booking_settings_form() {
?>
<h2 style="text-align: center;"><?php esc_html_e( 'Settings', 'taxi' ); ?></h2>
<form action="#" method="post">
        
    <!-- Pickup -->
    <div id="pickup">
        <div class="repeater-heading">
            <h5 class="pull-left"><?php esc_html_e( 'Destination-From Settings', 'taxi' ); ?></h5>
            <span class="btn btn-primary pt-5 pull-right repeater-add-btn">
            <?php esc_html_e( 'Add Destination-From Dropdown', 'taxi' ); ?>
            </span>
        </div>
        <div class="clearfix"></div>

        <?php 
        
        $pickup = unserialize( get_option( 'pickup' ) );

        if( is_array( $pickup ) && count( $pickup ) > 0 ):

        foreach( $pickup as $val ) :

        ?>
        <div class="items" data-group="pickup">
            <!-- Repeater Content -->
            <div class="item-content">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label"><?php esc_html_e( 'Destination-From', 'taxi' ); ?></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="<?php echo $val; ?>" id="inputName" placeholder="Name" data-name="name">
                    </div>
                </div>
            </div>
            <!-- Repeater Remove Btn -->
            <div class="pull-right repeater-remove-btn">
                <span class="btn btn-danger remove-btn">
                <?php esc_html_e( 'Remove', 'taxi' ); ?>
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php 
        endforeach;
        else:
        ?>
        <div class="items" data-group="pickup">
            <!-- Repeater Content -->
            <div class="item-content">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label"><?php esc_html_e( 'Destination From', 'taxi' ); ?></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Name" data-name="name">
                    </div>
                </div>
            </div>
            <!-- Repeater Remove Btn -->
            <div class="pull-right repeater-remove-btn">
                <span class="btn btn-danger remove-btn">
                <?php esc_html_e( 'Remove', 'taxi' ); ?>
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php
        endif;
        ?>


    </div>
    <!-- Pick up End -->
    
    <!-- drop off -->
    <div id="dropoff">
        <div class="repeater-heading">
            <h5 class="pull-left"><?php esc_html_e( 'Destination-To Settings', 'taxi' ); ?></h5>
            <span class="btn btn-primary pt-5 pull-right repeater-add-btn">
            <?php esc_html_e( 'Add Destination-To Dropdown', 'taxi' ); ?>
            </span>
        </div>
        <div class="clearfix"></div>

        <?php 
        
        $dropoff = unserialize( get_option( 'dropoff' ) );

        if( is_array( $dropoff ) ):

        foreach( $dropoff as $val ) :

        ?>
        <!-- Repeater Items -->
        <div class="items" data-group="dropoff">
            <!-- Repeater Content -->
            <div class="item-content">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label"><?php esc_html_e( 'Destination-To', 'taxi' ); ?></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="<?php echo $val; ?>" id="inputName" placeholder="Name" data-name="name">
                    </div>
                </div>
            </div>
            <!-- Repeater Remove Btn -->
            <div class="pull-right repeater-remove-btn">
                <span class="btn btn-danger remove-btn">
                <?php esc_html_e( 'Remove', 'taxi' ); ?>
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php 
        endforeach;
        else:
        ?>
        <!-- Repeater Items -->
        <div class="items" data-group="dropoff">
            <!-- Repeater Content -->
            <div class="item-content">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label"><?php esc_html_e( 'Destination-To', 'taxi' ); ?></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Name" data-name="name">
                    </div>
                </div>
            </div>
            <!-- Repeater Remove Btn -->
            <div class="pull-right repeater-remove-btn">
                <span class="btn btn-danger remove-btn">
                <?php esc_html_e( 'Remove', 'taxi' ); ?>
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php
        endif;
        ?>
    </div>
    <!-- drop off End -->
    <button type="submit" class="booking-submit" name="updateopt"><?php esc_html_e( 'Submit', 'taxi' ); ?></button>
</form>
<?php
}
// Booking Settings form data
function carrental_booking_settings_form_data() {

    if( isset( $_POST['updateopt'] ) ) {

        // Pickup
        if( isset( $_POST[ 'pickup' ] ) ) {

            $pickup = serialize( $_POST[ 'pickup' ] );
            update_option( 'pickup', $pickup );

        }
        // Dropoff
        if( isset( $_POST[ 'dropoff' ] ) ) {
            $dropoff = serialize( $_POST[ 'dropoff' ] );
            update_option( 'dropoff', $dropoff );
        }
    }


}

// Booking List
function carrental_booking_lists() {
    $args = array(
        'post_type'     => 'carbooking',
        'posts_per_page' => '-1'
    );

    $booking_lists = get_posts( $args );
    
    echo '<div class="booking-list"><ul>';
    echo '<h2 style="text-align:center;">Booking List</h2>';

    carrental_delete_booking();

    foreach( $booking_lists as $list ) {

    $pikdate    = get_post_meta( $list->ID, 'carrentals_date', true );

        if( $pikdate ) {
            echo '<li style="padding: 8px;background-color:#f8f8f8;"><span style="margin-left: 30px;">'.esc_html( $pikdate ).'</span><span style="float:right;"><button class="view-booking" data-target="modal-'.esc_attr( $list->ID ).'" >'.esc_html__( 'View', 'taxi' ).'</button></span>'.carrental_booking_admin_modal( $list->ID ).'</li>';
        }
        
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
function carrental_booking_admin_modal( $id ) {

    $destinationto  = get_post_meta( $id, 'carrentals_destinationto', true );
    $destinationfrom= get_post_meta( $id, 'carrentals_destinationfrom', true );
    $date           = get_post_meta( $id, 'carrentals_date', true );
    $username       = get_post_meta( $id, 'carrentals_username', true );
    $useremail      = get_post_meta( $id, 'carrentals_useremail', true );
    $userphone      = get_post_meta( $id, 'carrentals_userphone', true );
    
?>
    <div class="booking-modal modal-<?php echo esc_attr( $id ); ?>" style="position:absolute;top:0;background-color:#0003;top:0;bottom:0;left:0;right:0;display:none;">
        <div class="close-btn">Close</div>
        <div style="background-color: #f9f9f9;padding: 10px;max-width: 300px;margin: 0 auto;margin-top: 10%;">
            <h3 class="text-center"><?php esc_html_e( 'Car Booking Info', 'taxi' ) ?></h3>
            <ul class="modal-list">        
                       
                <li><strong><?php esc_html_e( 'Destination To:', 'taxi' ); ?></strong> <?php echo esc_html( $destinationto ); ?> </li>            
                <li><strong><?php esc_html_e( 'Destination From:', 'taxi' ); ?></strong> <?php echo esc_html( $destinationfrom ); ?> </li>            
                <li><strong><?php esc_html_e( 'Date:', 'taxi' ); ?></strong> <?php echo esc_html( $date ); ?> </li>            
                <li><strong><?php esc_html_e( 'Name:', 'taxi' ); ?></strong> <?php echo esc_html( $username ); ?> </li>            
                <li><strong><?php esc_html_e( 'Email:', 'taxi' ); ?> </strong><?php echo esc_html( $useremail ); ?> </li>            
                <li><strong><?php esc_html_e( 'Phone:', 'taxi' ); ?></strong> <?php echo esc_html( $userphone ); ?> </li>            
            </ul>

            <form action="#" method="post">
                <input type="hidden" name="bookingid" value="<?php echo absint( $id ) ?>" >
                <button name="deletebooking" class="deletebooking" type="submit">Delete</button>                
            </form>
        </div>
    </div>
<?php
}

// Booking Form Data 
function carrental_booking_form_data() {

    $error = new WP_Error();

    if( isset( $_POST['booking_submit'] )  ) {


        // destination to
        if( ! empty( $_POST['destinationTo'] ) ) {
            $destinationto = $_POST['destinationTo'];
        } else {
            $error->add( 'field', __( 'Destination field can\'t be empty.', 'taxi' ) );
        }
        // destination from
        if( ! empty( $_POST['destinationFrom'] ) ) {
            $destinationfrom = $_POST['destinationFrom'];
        } else {
            $error->add( 'field', __( 'Destination field can\'t be empty.', 'taxi' ) );
        }

        // 
        if( ! empty( $_POST['date'] ) ) {
            $date = $_POST['date'];
        } else {
            $error->add( 'field', __( 'Destination field can\'t be empty.', 'taxi' ) );
        }

        // 
        if( ! empty( $_POST['userName'] ) ) {
            $username = $_POST['userName'];
        } else {
            $error->add( 'field', __( 'Destination field can\'t be empty.', 'taxi' ) );
        }
        // 
        if( ! empty( $_POST['userEmail'] ) ) {
            $useremail = $_POST['userEmail'];
        } else {
            $error->add( 'field', __( 'Destination field can\'t be empty.', 'taxi' ) );
        }
        // 
        if( ! empty( $_POST['userPhone'] ) ) {
            $userphone = $_POST['userPhone'];
        } else {
            $error->add( 'field', __( 'Destination field can\'t be empty.', 'taxi' ) );
        }

        if( 1 > count( $error->get_error_messages() ) ) {

            $args = array(
                'post_type'     => 'carbooking',
                'post_title'    => sanitize_text_field( $destinationfrom ),
                'post_status'   => 'publish',
            );

            $insert_ID = wp_insert_post( $args );

            if( $insert_ID ) {
                
                update_post_meta( $insert_ID, 'carrentals_destinationto', sanitize_text_field( $destinationto ) );
                update_post_meta( $insert_ID, 'carrentals_destinationfrom', sanitize_text_field( $destinationfrom ) );
                update_post_meta( $insert_ID, 'carrentals_date', sanitize_text_field( $date ) );
                update_post_meta( $insert_ID, 'carrentals_username', sanitize_text_field( $username ) );
                update_post_meta( $insert_ID, 'carrentals_useremail', sanitize_text_field( $useremail ) );
                update_post_meta( $insert_ID, 'carrentals_userphone', sanitize_text_field( $userphone ) );
            }

        } else {
            return $error->get_error_messages();
        }

    }

}
// Delete Booking 
function carrental_delete_booking() {

    if ( isset( $_POST['deletebooking'] ) && isset( $_POST['bookingid'] ) ) {
        $delete = wp_delete_post( absint( $_POST['bookingid'] ) );

        if( $delete ) {
            echo '<h4 style="text-align:center;">'.esc_html__( 'Successfully Deleted', 'taxi' ).'</h4>';
        }

    }
    
}

