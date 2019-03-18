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
class Taxi_Call_To_Action extends Widget_Base {

	public function get_name() {
		return 'taxi-call-to-action';
	}

	public function get_title() {
		return __( 'Call To Action', 'taxi' );
	}

	public function get_icon() {
		return 'eicon-call-to-action';
	}

	public function get_categories() {
		return [ 'taxi-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  training Section Heading ------------------------------
        $this->start_controls_section(
            'c2a_heading',
            [
                'label' => __( 'Call To Action', 'taxi' ),
            ]
        );
        $this->add_control(
            'c2a_title', [
                'label' => __( 'Title', 'taxi' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => 'Experience Great Support'

            ]
        );
        $this->add_control(
            'description', [
                'label' => __( 'Description', 'taxi' ),
                'type'  => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation'

            ]
        );
        $this->add_control(
            'c2a_button', [
                'label' => __( 'Button label', 'taxi' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => 'Reach Our Support Team'

            ]
        );
        $this->add_control(
            'c2a_btn_url', [
                'label' => __( 'Button URL', 'taxi' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true

            ]
        );

        $this->end_controls_section(); // End section top content
        

        //------------------------------ Style Section ------------------------------
        $this->start_controls_section(
            'style_section', [
                'label' => __( 'Style Section', 'taxi' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'C2A Title Color', 'taxi' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .home-calltoaction-area h1' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'color_desc', [
                'label'     => __( 'C2A Description Color', 'taxi' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .home-calltoaction-area p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btn', [
                'label'     => __( 'C2A Button Color', 'taxi' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .home-calltoaction-area .primary-btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btn_bg', [
                'label'     => __( 'C2A Button Background Color', 'taxi' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .home-calltoaction-area .primary-btn' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btn_hover_bg', [
                'label'     => __( 'C2A Button Hover Background Color', 'taxi' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .home-calltoaction-area .primary-btn:hover' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btn_hover_color', [
                'label'     => __( 'C2A Button Hover Color', 'taxi' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .home-calltoaction-area .primary-btn:hover' => 'color: {{VALUE}};',
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
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .home-calltoaction-area',
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();

    ?>
    <section class="home-calltoaction-area relative">
        <div class="container">
            <div class="overlay overlay-bg"></div>
            <div class="row align-items-center section-gap">
                <div class="col-lg-8">
                    <?php
                    // Title
                    echo taxi_heading_tag(
                        array(
                            'tag'   => 'h1',
                            'text'  => esc_html( $settings['c2a_title'] )
                        )
                    );
                    
                    // Description
                    echo taxi_get_textareahtml_output( $settings['description'] );

                    ?>
                    
                </div>
                <div class="col-lg-4 btn-left">
                    <a href="<?php echo esc_url( $settings['c2a_btn_url'] ) ?>" class="primary-btn">
                        <?php echo esc_html( $settings['c2a_button'] ) ?>
                    </a>
                </div>
            </div>
        </div>	
    </section>

    <?php

    }

}
