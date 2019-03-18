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
class Taxi_About extends Widget_Base {

	public function get_name() {
		return 'taxi-about';
	}

	public function get_title() {
		return __( 'About', 'taxi' );
	}

	public function get_icon() {
		return 'eicon-post-slider';
	}

	public function get_categories() {
		return [ 'taxi-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  About content ------------------------------
		
		$this->start_controls_section(
			'about_content',
			[
				'label' => __( 'About Us', 'taxi' ),
			]
		);
        $this->add_control(
            'title',
            [
                'label'         => esc_html__( 'Title', 'taxi' ),
                'description'   => esc_html__('Use <br> tag for line break', 'taxi'),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'Who we are <br> to Serve the nation', 'taxi' )
            ]
        );
		$this->add_control(
			'sub-title',
			[
				'label'         => esc_html__( 'Sub-title', 'taxi' ),
				'type'          => Controls_Manager::TEXT,
				'label_block'   => true,
				'default'       => __( 'Brand new app to blow your mind', 'taxi' )
			]
		);
        $this->add_control(
            'description',
            [
                'label'         => esc_html__( 'Description', 'taxi' ),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( 'inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.', 'taxi' )
            ]
        );

		$this->add_control(
			'btn-lable',
			[
				'label'         => esc_html__( 'Button Label', 'taxi' ),
				'type'          => Controls_Manager::TEXT,
				'label_block'   => true,
				'default'       => __( 'Get Details', 'taxi' )
			]
		);
		$this->add_control(
			'btn-url',
			[
				'label'         => esc_html__( 'Button URL', 'taxi' ),
				'type'          => Controls_Manager::TEXT,
				'label_block'   => true,
				'default'       => esc_url( 'http://your-link.com', 'taxi' )
			]
		);
		$this->add_control(
			'feature_image',
			[
				'label'         => esc_html__( 'Section Feature Iamge', 'taxi' ),
				'type'          => Controls_Manager::MEDIA,

			]
		);

		$this->end_controls_section(); // End about content



        //------------------------------ Style Content ------------------------------

        $this->start_controls_section(
            'stylecolor', [
                'label' => __( 'Style Color', 'taxi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_title', [
                'label'     => __( 'Title Color', 'taxi' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .home-about-area h1'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_sub_title', [
                'label'     => __( 'Sub-Title Color', 'taxi' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .home-about-area h4'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'description_color', [
                'label'     => __( 'Description Color', 'taxi' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777',
                'selectors' => [
                    '{{WRAPPER}} .home-about-area p'   => 'color: {{VALUE}};',
                ],
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
					'{{WRAPPER}} .about-right .primary-btn' => 'color: {{VALUE}};'
				],
			]
		);
		$this->add_control(
			'color_btnhoverlabel', [
				'label'     => __( 'Button Hover Label Color', 'taxi' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#f9d700',
				'selectors' => [
					'{{WRAPPER}} .about-right .primary-btn:hover' => 'color: {{VALUE}};'
				],
			]
		);
		$this->add_control(
			'color_btnborder', [
				'label'     => __( 'Button Border Color', 'taxi' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .about-right .primary-btn' => 'border-color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'color_btnhovborder', [
				'label'     => __( 'Button Hover Border Color', 'taxi' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#f9d700',
				'selectors' => [
					'{{WRAPPER}} .about-right .primary-btn:hover' => 'border-color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'color_btnbg', [
				'label'       => __( 'Button Background Color', 'taxi' ),
				'type'        => Controls_Manager::COLOR,
				'default'     => '#f9d700',
				'selectors'   => [
					'{{WRAPPER}} .about-right .primary-btn' => 'background-color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'color_btnhovbg', [
				'label'     => __( 'Button Hover Background Color', 'taxi' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => 'rgba(255,255,255,0)',
				'selectors' => [
					'{{WRAPPER}} .about-right .primary-btn:hover' => 'background-color: {{VALUE}};',
				],
			]
		);


		$this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    $img_id = $settings['feature_image']['id'];
    $feature_image = wp_get_attachment_image(absint($img_id), 'taxi_580x450', '', array('class' => 'img-fluid'));
	?>
		<section class="home-about-area section-gap">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 about-left">
						<?php
						if( !empty( $img_id ) ){
							echo wp_kses_post( $feature_image );
						}
						?>
					</div>
					<div class="col-lg-6 about-right">
					<?php
						// Title
						echo taxi_heading_tag(
							array(
								'tag'   => 'h1',
								'text'  => $settings['title']
							)
						);
						// Sub Title
						echo taxi_heading_tag(
							array(
								'tag'   => 'h4',
								'text'  => $settings['sub-title']
							)
						);

						//Description
						echo taxi_get_textareahtml_output( $settings['description'] );

						// Button
						if( ! empty( $settings['btn-lable'] ) && ! empty( $settings['btn-url'] ) ){
							echo '<a class="text-uppercase primary-btn" href="'. esc_url( $settings['btn-url'] ) .'"> '. esc_html($settings['btn-lable']) .' </a>';
						}
						?>
					</div>
				</div>
			</div>	
		</section>

		<?php
    }

}
