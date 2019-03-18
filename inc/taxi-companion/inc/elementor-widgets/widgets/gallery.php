<?php
namespace Taxielementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Taxi elementor Team Member section widget.
 *
 * @since 1.0
 */
class Taxi_Gallery extends Widget_Base {

	public function get_name() {
		return 'taxi-gallery';
	}

	public function get_title() {
		return __( 'Gallery', 'taxi' );
	}

	public function get_icon() {
		return 'eicon-gallery-masonry';
	}

	public function get_categories() {
		return [ 'taxi-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  training Section Heading ------------------------------
        $this->start_controls_section(
            'gallery_heading',
            [
                'label' => __( 'Gallery Section Heading', 'taxi' ),
            ]
        );
        $this->add_control(
            'sect_title', [
                'label' => __( 'Title', 'taxi' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true

            ]
        );
        $this->add_control(
            'sect_subtitle', [
                'label' => __( 'Sub Title', 'taxi' ),
                'type'  => Controls_Manager::TEXTAREA,
                'label_block' => true

            ]
        );

        $this->end_controls_section(); // End section top content
        
		// ----------------------------------------   Gallery content ------------------------------
		$this->start_controls_section(
			'gallery_block',
			[
				'label' => __( 'Gallery', 'taxi' ),
			]
		);
		$this->add_control(
            'gallery_content', [
                'label' => __( 'Upload Imgaes', 'taxi' ),
                'type'  => Controls_Manager::GALLERY,
                                
            ]
		);

		$this->end_controls_section(); // End Gallery content


        //------------------------------ Style Section ------------------------------
        $this->start_controls_section(
            'style_section', [
                'label' => __( 'Style Section Heading', 'taxi' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Section Title Color', 'taxi' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#333333',
                'selectors' => [
                    '{{WRAPPER}} .section-title h1' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'color_sectsubtitle', [
                'label'     => __( 'Section Sub Title Color', 'taxi' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777',
                'selectors' => [
                    '{{WRAPPER}} .section-title p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();
    $img_gallery = ! empty( $settings['gallery_content'] ) ? $settings['gallery_content'] : '';
    ?>
    <section class="image-gallery-area section-gap">
        <div class="container">
            <?php
                // Section Heading
                taxi_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
            ?>					
            <div class="row">
                <div class="col-lg-4 single-gallery">
                    <?php 
                    $count = count( $img_gallery );
                    $i = 0;
                    foreach( $img_gallery as $gallery ){
                        $i++;
                        echo '<a href="'. $gallery['url'] .'" class="img-gal"><img class="img-fluid" src="'. $gallery['url'] .'"></a>';

                        if( $i % 2 == 0 && $count >$i ) {
                            echo '</div><div class="col-lg-4 single-gallery">';
                        }
                        
                    }

                    ?>
                </div>	
				
            </div>
        </div>	
    </section>
    <?php

    }

}
