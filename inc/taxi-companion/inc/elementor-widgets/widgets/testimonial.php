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
 * Taxi elementor section widget.
 *
 * @since 1.0
 */
class Taxi_Testimonial extends Widget_Base {

	public function get_name() {
		return 'taxi-testimonial';
	}

	public function get_title() {
		return __( 'Testimonial', 'taxi' );
	}

	public function get_icon() {
		return 'eicon-post-slider';
	}

	public function get_categories() {
		return [ 'taxi-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // Testimonial Heading
		$this->start_controls_section(
			'testimonial_heading',
			[
				'label' => __( 'Testimonial Section Heading', 'taxi' ),
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


		// ----------------------------------------  Customers review content ------------------------------
		$this->start_controls_section(
			'customersreview_content',
			[
				'label' => __( 'Customers Review', 'taxi' ),
			]
		);

		$this->add_control(
            'review_slider', [
                'label' => __( 'Create Review', 'taxi' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'  => 'label',
                        'label' => __( 'Name', 'taxi' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => 'Name'
                    ],
	                [
		                'name' => 'reviewstar',
		                'label' => __('Star Review', 'taxi'),
		                'type' => Controls_Manager::CHOOSE,
		                'options' => [
			                '1' => [
				                'title' => __('1', 'taxi'),
				                'icon' => 'fa fa-star',
			                ],
			                '2' => [
				                'title' => __('2', 'taxi'),
				                'icon' => 'fa fa-star',
			                ],
			                '3' => [
				                'title' => __('3', 'taxi'),
				                'icon' => 'fa fa-star',
			                ],
			                '4' => [
				                'title' => __('4', 'taxi'),
				                'icon' => 'fa fa-star',
			                ],
			                '5' => [
				                'title' => __('5', 'taxi'),
				                'icon' => 'fa fa-star',
			                ],
		                ],
	                ],
                    [
                        'name'  => 'desc',
                        'label' => __( 'Descriptions', 'taxi' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'default'   => __('Accessories Here you can find the best computeraccessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory', 'taxi')
                    ]
                ],
            ]
		);

		$this->end_controls_section(); // End exibition content

        /**
         * Style Tab
         *
         */
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
				'default'   => '#fff',
				'selectors' => [
					'{{WRAPPER}} .title h1' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'color_sectsubtitle', [
				'label'     => __( 'Section Sub Title Color', 'taxi' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#fff',
				'selectors' => [
					'{{WRAPPER}} .title p' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

        // Testimonial Item style
		$this->start_controls_section(
			'style_item', [
				'label' => __( 'Style Item', 'taxi' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'testimonial_title_color', [
				'label'     => __( 'Testimonial Title Color', 'taxi' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#222',
				'selectors' => [
					'{{WRAPPER}} .single-review h4' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'testimonial_title_hover_color', [
				'label'     => __( 'Testimonial Title Hover Color', 'taxi' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#f9d700',
				'selectors' => [
					'{{WRAPPER}} .single-review:hover h4' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'testimonial_desc_color', [
				'label'     => __( 'Testimonial Description Color', 'taxi' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#777',
				'selectors' => [
					'{{WRAPPER}} .single-review p' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

        /*------------------------------ Background Style ------------------------------*/
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
                'selector' => '{{WRAPPER}} .reviews-area',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
	?>
	<section class="reviews-area section-gap">
		<div class="container">
			<?php
			// Section Heading
			taxi_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
			?>				
			<div class="row">
			<?php
				if ( is_array( $settings['review_slider'] ) && count( $settings['review_slider'] ) > 0 ):
					foreach ( $settings['review_slider'] as $review ): ?>
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<?php
								// Name =======
								if ( ! empty( $review['label'] ) ) {
									echo taxi_heading_tag(
										array(
											'tag'  => 'h4',
											'text' => esc_html( $review['label'] ),
										)
									);
								}
								
								// Description
								if ( ! empty( $review['desc'] ) ) {
									echo taxi_get_textareahtml_output( $review['desc'] );
								}

								// Star Review ==================
								$star = $review['reviewstar'];
								if (!empty( $star )) {
									echo '<div class="star">';
									for ($i = 1; $i <= 5; $i++) {

										if ($star >= $i) {
											echo '<span class="fa fa-star checked"></span>';
										} else {
											echo '<span class="fa fa-star"></span>';
										}
									}
									echo '</div>';
								}
								?>
							</div>
						</div>
						<?php
					endforeach;
				endif;
			?>
			</div>
		</div>	
	</section>
    <?php

    }
	
}
