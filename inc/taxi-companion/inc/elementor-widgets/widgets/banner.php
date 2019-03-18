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
 * Taxi elementor about us section widget.
 *
 * @since 1.0
 */
class Taxi_Banner extends Widget_Base {

	public function get_name() {
		return 'taxi-banner';
	}

	public function get_title() {
		return __( 'Banner', 'taxi' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'taxi-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  content ------------------------------
        $this->start_controls_section(
            'banner_content',
            [
                'label' => __( 'Banner Section Content', 'taxi' ),
            ]
        );
        $this->add_control(
            'banner_titleone',
            [
                'label'         => esc_html__( 'Title ', 'taxi' ),
                'type'          => Controls_Manager::TEXT,
                'default'       => esc_html__( '911 999 911', 'taxi' ),
                'label_block'   => true
            ]
        );
        $this->add_control(
            'banner_subtitle',
            [
                'label'         => esc_html__( 'Sub Title', 'taxi' ),
                'type'          => Controls_Manager::TEXT,
                'default'       => esc_html__( 'NEED A RIDE? JUST CALL', 'taxi' ),
                'label_block'   => true
            ]
        );
        $this->add_control(
            'banner_desc',
            [
                'label'         => esc_html__( 'Description', 'taxi' ),
                'type'          => Controls_Manager::WYSIWYG,
                'default'       => __( 'Whether you enjoy city breaks or extended holidays in the sun, you can always improve your travel experiences by staying in a small.', 'taxi' ),
            ]
        );
        $this->add_control(
            'banner_btnlabel',
            [
                'label'         => esc_html__( 'Button Label', 'taxi' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Call for taxi', 'taxi' )
            ]
        );
        $this->add_control(
            'banner_btnurl',
            [
                'label'         => esc_html__( 'Button Url', 'taxi' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false
            ]
        );
        $this->end_controls_section(); // End content


        $this->start_controls_section(
            'form_setting', [
                'label' => __( 'Car Booking Form', 'taxi' ),
                
            ]
        );
        $this->add_control(
            'form_switch', [
                'label'       => __( 'Form Show / Hide', 'taxi' ),
                'description' => __( 'Add Destination options from Dashboard > Car Booking', 'taxi' ),
                'type'        => Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'taxi' ),
				'label_off' => __( 'Hide', 'taxi' ),
				'return_value' => 'yes',
				'default' => 'yes',
            ]
        );
        $this->add_control(
            'form_title', [
                'label'       => __( 'Form Title', 'taxi' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => 'Book Your Texi Online!',
                'condition'  => [
                    'form_switch' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'form_btn_label', [
                'label'     => __( 'Form Button Labal', 'taxi' ),
                'type'      => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => 'Make reservation',
                'condition'  => [
                    'form_switch' => 'yes'
                ]
            ]
        );
        
        $this->end_controls_section();

        //------------------------------ Style title ------------------------------
        $this->start_controls_section(
            'style_textcolor', [
                'label' => __( 'Style Content', 'taxi' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_titleone', [
                'label'     => __( 'Sub-title Color', 'taxi' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner-content h6' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_subtitle',
                'selector'  => '{{WRAPPER}} .banner-content h6',
            ]
        );
        $this->add_control(
            'color_titletwo', [
                'label'     => __( 'Title Color', 'taxi' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f9d700',
                'selectors' => [
                    '{{WRAPPER}} .banner-content h1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_title',
                'selector'  => '{{WRAPPER}} .banner-content h1',
            ]
        );
        $this->add_control(
            'color_desc', [
                'label'     => __( 'Description Color', 'taxi' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner-content p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_desc',
                'selector'  => '{{WRAPPER}} .banner-content p',
            ]
        );

        $this->end_controls_section();

        //------------------------------ Style button ------------------------------
        $this->start_controls_section(
            'style_btn', [
                'label' => __( 'Style Button', 'taxi' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_btnlabel', [
                'label'     => __( 'Button Label Color', 'taxi' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .banner-content .primary-btn.squire' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhoverlabel', [
                'label'     => __( 'Button Hover Label Color', 'taxi' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .banner-content .primary-btn.squire:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnbg', [
                'label'       => __( 'Button Background Color', 'taxi' ),
                'type'        => Controls_Manager::COLOR,
                'default'     => '#f9d700',
                'selectors'   => [
                    '{{WRAPPER}} .banner-content .primary-btn.squire' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhovbg', [
                'label'     => __( 'Button Hover Background Color', 'taxi' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner-content .primary-btn.squire:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );


        $this->end_controls_section();

        /**
         * Style Tab
         * ------------------------------ Background Style ------------------------------
         *
         */
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'taxi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'bg_overlay',
            [
                'label' => __( 'Overlay', 'taxi' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'taxi' ),
                'label_off' => __( 'Hide', 'taxi' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'sect_ooverlay_bgcolor',
            [
                'label'     => __( 'Overlay Color', 'taxi' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'bg_overlay' => 'yes'
                ]
            ]
        );
		$this->add_control(
			'sectionoverlaybg', [
				'label'     => __( 'Button Hover Background Color', 'taxi' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => 'rgba(0, 0, 0, 0.8)',
				'selectors' => [
					'{{WRAPPER}} .banner-area .overlay-bg' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'bg_overlay' => 'yes'
				]
			]
		);

        $this->add_control(
            'section_bgheading',
            [
                'label'     => __( 'Background Settings', 'taxi' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'taxi' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .banner-area',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    $btnlabel = ! empty( $settings['form_btn_label'] ) ? $settings['form_btn_label'] : 'Make reservation';
    // call load widget script
    $this->load_widget_script();
    carrental_booking_form_data();

    ?>

    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>	
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-between">
                <div class="banner-content col-lg-6 col-md-6 ">
                <?php 
                    // Banner Sub Title
                    if( ! empty( $settings['banner_subtitle'] ) ) {
                        echo taxi_heading_tag(
                            array(
                                'tag'   => 'h6',
                                'text'  => esc_html( $settings['banner_subtitle'] ),
                                'class' => esc_attr( 'text-uppercase' )
                            )
                        );
                    }
                    // Banner Title
                    if( ! empty( $settings['banner_titleone'] ) ) {
                        echo taxi_heading_tag(
                            array(
                                'tag'   => 'h1',
                                'text'  => esc_html( $settings['banner_titleone'] )
                            )
                        );
                    }
                    // Description
                    if( ! empty( $settings['banner_desc'] ) ) {
                        echo taxi_get_textareahtml_output( $settings['banner_desc'] );
                    }
                    // Button
                    if( ! empty( $settings[ 'banner_btnlabel' ] ) && !empty( $settings['banner_btnurl']['url'] ) ) {
                        echo taxi_anchor_tag(
                            array(
                                'url'   => esc_url( $settings['banner_btnurl']['url'] ),
                                'text'  => esc_html( $settings['banner_btnlabel'] ),
                                'class' => esc_attr( 'primary-btn text-uppercase' )
                            )
                        );
                    }
                    ?>
                    
                </div>
                <?php
                if( 'yes' === $settings['form_switch'] ){
                    ?>
                    <div class="col-lg-4  col-md-6 header-right">
                        <h4 class="pb-30">
                            <?php 
                                if( ! empty( $settings['form_title'] ) ) {
                                    echo esc_html( $settings['form_title'] );
                                }
                            ?>  
                        </h4>
                        <form class="form" action="#" method="post" role="form" autocomplete="off" >
                            <div class="from-group">
                                <input class="form-control txt-field" type="text" name="userName" placeholder="<?php esc_html_e('Your name', 'taxi')?>"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'">
                                <input class="form-control txt-field" type="email" name="userEmail" placeholder="<?php esc_html_e('Email address', 'taxi')?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'">
                                <input class="form-control txt-field" type="tel" name="userPhone" placeholder="<?php esc_html_e('Phone number', 'taxi')?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'">
                            </div>								
                            <div class="form-group">
                                <div class="default-select" id="default-select">
                                    <select name="destinationFrom" required>
                                        <option value="" disabled selected hidden><?php esc_html_e('From Destination', 'taxi') ?></option>
                                        <?php 
                                            $pickup = unserialize( get_option( 'pickup' ) );

                                            foreach( $pickup as $val ) {
                                                echo '<option value="' .esc_attr( $val ). '">' . esc_html( $val ) . '</option>';
                                            }
                                            
                                            ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="default-select" id="default-select2">
                                    <select name="destinationTo" required>
                                        <option value="" disabled selected hidden><?php esc_html_e('To Destination', 'taxi') ?></option>
                                        <?php 
                                            $dropoff = unserialize( get_option( 'dropoff' ) );

                                            foreach( $dropoff as $val ) {
                                                echo '<option value="' .esc_attr( $val ). '">' . esc_html( $val ) . '</option>';
                                            }
                                            ?>
                                    </select>
                                </div>
                            </div>							    
                            <div class="form-group">
                                <div class="input-group dates-wrap">                                              
                                    <input id="datepicker2" name="date" class="dates form-control"  placeholder="Date & time" type="text" required>                        
                                    <div class="input-group-prepend">
                                        <span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                                    </div>											
                                </div>
                            </div>							    
                            <div class="form-group">

                                    <button type="submit" name="booking_submit" class="btn btn-default btn-lg btn-block text-center text-uppercase"><?php echo $btnlabel; ?></button>

                            </div>
                        </form>
                    </div>	
                    <?php
                } ?>										
            </div>
        </div>					
    </section>


    <?php

    }
    
    public function load_widget_script() {
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            var window_width = $(window).width(),
                window_height = window.innerHeight,
                header_height = $(".default-header").height(),
                header_height_static = $(".site-header.static").outerHeight(),
                fitscreen = window_height - header_height;

            $(".fullscreen").css("height", window_height)
            $(".fitscreen").css("height", fitscreen);
        })(jQuery);
        </script>
        <?php 
        }
    }
	
}
