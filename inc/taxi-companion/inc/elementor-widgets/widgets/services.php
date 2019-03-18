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
class Taxi_Services extends Widget_Base {

	public function get_name() {
		return 'taxi-services';
	}

	public function get_title() {
		return __( 'Services', 'taxi' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'taxi-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  training Section Heading ------------------------------
        $this->start_controls_section(
            'services_heading',
            [
                'label' => __( 'Services Section Heading', 'taxi' ),
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
        
		// ----------------------------------------   Services content ------------------------------
		$this->start_controls_section(
			'services_block',
			[
				'label' => __( 'Services', 'taxi' ),
			]
		);
		$this->add_control(
            'services_content', [
                'label' => __( 'Create Training', 'taxi' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'  => 'label',
                        'label' => __( 'Title', 'taxi' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => 'Name'
                    ],
                    [
                        'name'  => 'url',
                        'label' => __( 'Title Url', 'taxi' ),
                        'type'  => Controls_Manager::URL,
                        'show_external' => false,
                    ],
                    [
                        'name'  => 'desc',
                        'label' => __( 'Descriptions', 'taxi' ),
                        'type'  => Controls_Manager::TEXTAREA,
                    ],
                    [
                        'name'  => 'select_icon',
                        'label' => __( 'Select Icon type', 'taxi' ),
                        'type'  => Controls_Manager::SELECT,
                        'options'=> [
                            'font_icon'  => __( 'Fontawesome Icon', 'taxi' ),
                            'image_icon' => __( 'Image Icon', 'taxi' ),
                        ],
                        'default'   => 'font_icon'
                    ],
                    [
                        'name'  => 'fontawesome_icon',
                        'label' => __( 'FontAwesome Icon', 'taxi' ),
                        'type'  => Controls_Manager::ICON,
                        'condition' => [
                            'select_icon' => 'font_icon'
                        ]
                    ],
                    [
                        'name'  => 'img',
                        'label' => __( 'Image Icon', 'taxi' ),
                        'type'  => Controls_Manager::MEDIA,
                        'condition' => [
                            'select_icon' => 'image_icon'
                        ]
                    ]
                ],
            ]
		);

		$this->end_controls_section(); // End Services content


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

        //------------------------------ Style services Box ------------------------------
        $this->start_controls_section(
            'style_trainingbox', [
                'label' => __( 'Style Services Content', 'taxi' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_servicestitle', [
                'label' => __( 'Title Color', 'taxi' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-service h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_serviceshovertitle', [
                'label' => __( 'Title Hover Color', 'taxi' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-service:hover h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_servicesicon', [
                'label' => __( 'Icon Color', 'taxi' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-service span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_servicesiconhover', [
                'label' => __( 'Icon Hover Color', 'taxi' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-service:hover span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_servicesdescription', [
                'label' => __( 'Description Color', 'taxi' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-service p' => 'color: {{VALUE}};',
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
                'selector' => '{{WRAPPER}} .services-area',
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();

    ?>
    <section class="services-area pb-120">
        <div class="container">
            <?php
                // Section Heading
                taxi_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
            ?>
            <div class="row">
            <?php 
            if( ! empty( $settings['services_content'] ) ){
                foreach( $settings['services_content'] as $val ){
                    $title_link = ! empty( $val['url']['url'] ) ? $val['url']['url'] : '';
                    // Member Picture
                    $bgUrl = '';
                    if( ! empty( $val['img']['url'] ) ) {
                        $bgUrl = $val['img']['url'];
                    }
                

                    ?>
                    <div class="col-lg-4 single-service">
                        <?php
                            // Image
                            if( $val['select_icon'] == 'image_icon' ){
                                echo taxi_img_tag(
                                    array(
                                        'url'   => esc_url( $bgUrl ),
                                        'class'   => 'img-fluid'
                                    )
                                );
                            } else{
                                echo '<span class="'. $val['fontawesome_icon'] .'"></span>';
                            }
                        ?>
                        
                        <a href="<?php echo esc_url( $title_link ) ?>">
                            <?php
                            // Title
                            if( ! empty( $val['label'] ) ) {
                                echo taxi_heading_tag(
                                    array(
                                        'tag'  => 'h4',
                                        'text' => esc_html( $val['label'] )
                                    )
                                );
                            }
                            ?>
                        </a>
                        <?php
                        // Description
                        if( ! empty( $val['desc'] ) ) {
                            echo taxi_paragraph_tag(
                                array(
                                    'text'  => esc_html( $val['desc'] ),
                                )
                            );
                        }
                        ?>

                    </div>
                    <?php
                }
            } ?>										
            </div>	
        </div>	
    </section>

    <?php

    }

}
