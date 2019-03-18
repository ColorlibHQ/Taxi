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

// Add Image Size
add_image_size( 'taxi_555x320', 555, 320, true );
add_image_size( 'taxi_580x450', 580, 450, true );


// Instagram object Instance
function taxi_instagram_instance() {
    
    $api = Wpzoom_Instagram_Widget_API::getInstance();

    return $api;
}

// Blog Section
function taxi_blog_section( $postnumber ) {
     
    $date_format = get_option( 'date_format' );

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => esc_html( $postnumber ),
    );
    
    $query = new WP_Query( $args );
    
    if( $query->have_posts() ):
        while( $query->have_posts() ):
            $query->the_post();
            ?>
            <div class="col-lg-6">
                <div class="single-latest-blog">
                <?php
	                // Thumbnail
	                if( has_post_thumbnail() ) {
		                echo '<div class="thumb">';
		                the_post_thumbnail( 'taxi_555x320', array( 'class' => 'img-fluid' ) );
		                echo '</div>';
	                }
	                ?>
                    <ul class="tags">
                        <?php the_tags('<li>', '</li><li>', '</li>'); ?>
                    </ul>
                    <a href="<?php the_permalink(); ?>">
                        <h4><?php the_title(); ?></h4>
                    </a>
                    <?php
	                // Limited Excerpt
	                echo taxi_excerpt_length( '30' );
	                ?>
                    <p class="date"><?php the_time($date_format); ?></p>
                </div>
            </div>
            <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    <?php
}

// 
function taxi_section_heading( $title = '', $subtitle = '' ) {
    if( $title || $subtitle ):
    ?>
        <div class="row section-title">
            <?php 
            // Title
            if( $title ){
                echo taxi_heading_tag(
                    array(
                        'tag'    => 'h1',
                        'class'  => 'mb-10',
                        'text'   => esc_html( $title ),
                    )
                );
            }
            // Sub Title
            if( $subtitle ){
                echo taxi_paragraph_tag(
                    array(
                        'text'  => esc_html( $subtitle ),
                    )
                );
            }
            ?>
        </div> 
    <?php
    endif;
}

// Set contact form 7 default form template
function taxi_contact7_form_content( $template, $prop ) {
    
    if ( 'form' == $prop ) {

        $template =
            '<div class="row"><div class="col-lg-6 form-group">[text* your-name class:common-input class:mb-20 class:form-control placeholder "Enter your name"][email* email-836 class:common-input class:mb-20 class:form-control placeholder "Enter email address"][text* text-299 class:common-input class:mb-20 class:form-control placeholder "Enter your subject"]</div><div class="col-lg-6 form-group">[textarea* textarea-697 class:common-textarea class:form-control placeholder "Message"]</div><div class="col-lg-12"><div class="alert-msg" style="text-align: left;"></div>[submit class:cp-btn class:genric-btn class:primary class:circle "Send Message"]</div></div>';

        return $template;

    } else {
    return $template;
    } 
}
add_filter( 'wpcf7_default_template', 'taxi_contact7_form_content', 10, 2 );


function return_tab_data( $getTags, $menu_tabs ) {


	$y = [];
	foreach ( $getTags as $val ) {

		$t = [];

		foreach( $menu_tabs as $data ) {
			if( $data['label'] == $val ) {
				$t[] = $data;
			}
		}

		$y[$val] = $t;

	}

	return $y;
}