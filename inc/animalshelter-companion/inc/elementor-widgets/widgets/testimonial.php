<?php
namespace Animalshelterelementor\Widgets;

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
 * Animalshelter elementor section widget.
 *
 * @since 1.0
 */
class Animalshelter_Testimonial extends Widget_Base {

	public function get_name() {
		return 'animalshelter-testimonial';
	}

	public function get_title() {
		return __( 'Testimonial', 'animalshelter-companion' );
	}

	public function get_icon() {
		return 'eicon-post-slider';
	}

	public function get_categories() {
		return [ 'animalshelter-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Customers Review Section Heading ------------------------------
        $this->start_controls_section(
            'customersreview_heading',
            [
                'label' => __( 'Customers Review Section Heading', 'animalshelter-companion' ),
            ]
        );
        $this->add_control(
            'sect_title', [
                'label' => __( 'Title', 'animalshelter-companion' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true

            ]
        );
        $this->add_control(
            'sect_subtitle', [
                'label' => __( 'Sub Title', 'animalshelter-companion' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true

            ]
        );

        $this->end_controls_section(); // End section top content
        
		// ----------------------------------------  Customers review content ------------------------------
		$this->start_controls_section(
			'customersreview_content',
			[
				'label' => __( 'Customers Review', 'animalshelter-companion' ),
			]
		);
		$this->add_control(
            'review_slider', [
                'label' => __( 'Create Review', 'animalshelter-companion' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'  => 'label',
                        'label' => __( 'Name', 'animalshelter-companion' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => 'Name'
                    ],
                    [
                        'name'  => 'desiganation',
                        'label' => __( 'Desiganation', 'animalshelter-companion' ),
                        'type'  => Controls_Manager::TEXT,
                    ],
                    [
                        'name'  => 'desc',
                        'label' => __( 'Descriptions', 'animalshelter-companion' ),
                        'type'  => Controls_Manager::WYSIWYG,
                    ],
                    [
                        'name'  => 'img',
                        'label' => __( 'Image', 'animalshelter-companion' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                ],
            ]
		);

		$this->end_controls_section(); // End exibition content


        //------------------------------ Style Section ------------------------------
        $this->start_controls_section(
            'style_section', [
                'label' => __( 'Style Section Heading', 'animalshelter-companion' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Section Title Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222222',
                'selectors' => [
                    '{{WRAPPER}} .title h1' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'color_sectsubtitle', [
                'label'     => __( 'Section Sub Title Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777777',
                'selectors' => [
                    '{{WRAPPER}} .title p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();


        //------------------------------ Style Content ------------------------------
        $this->start_controls_section(
            'style_content', [
                'label' => __( 'Style Content', 'animalshelter-companion' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_title', [
                'label'     => __( 'Title Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .feedback-right h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_price', [
                'label'     => __( 'Star Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .feedback-right .star .checked' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_desc', [
                'label'     => __( 'Descriptions Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .feedback-right p' => 'color: {{VALUE}};',
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
                'label' => __( 'Style Background', 'animalshelter-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'bg_overlay',
            [
                'label' => __( 'Overlay', 'animalshelter-companion' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'animalshelter-companion' ),
                'label_off' => __( 'Hide', 'animalshelter-companion' ),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sect_ooverlay_bgcolor',
            [
                'label'     => __( 'Overlay Color', 'animalshelter-companion' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'bg_overlay' => 'yes'
                ]
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionoverlaybg',
                'label' => __( 'Overlay', 'animalshelter-companion' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .feedback-area .overlay-bg',
                'condition' => [
                    'bg_overlay' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'section_bgheading',
            [
                'label'     => __( 'Background Settings', 'animalshelter-companion' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'animalshelter-companion' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .feedback-area',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    // call load widget script
    $this->load_widget_script();
 

    ?>

    <section class="testomial-area section-gap" id="testimonail">
        <?php 
        if( ! empty( $settings['bg_overlay'] ) ) {
            echo '<div class="overlay overlay-bg"></div>';
        }
        ?>
        <div class="container">
            <?php 
            // Section Heading
            animalshelter_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
            ?>

            <div class="row">
                <div class="active-testimonial-carusel">
                    <?php 
                    
                    if( is_array( $settings['review_slider'] ) && count( $settings['review_slider'] ) > 0 ):
                        foreach( $settings['review_slider'] as $review ):

                    ?>
                    <div class="single-testimonial item">
                        <?php
                        //
                        if( ! empty( $review['img']['url'] ) ) {
                            echo animalshelter_img_tag(
                                array(
                                    'url'   => esc_url( $review['img']['url'] ),
                                    'class' => esc_attr( 'mx-auto' )
                                )
                            );
                        }
                        //
                        if( ! empty( $review['desc'] ) ) {
                            echo '<div class="desc">'.animalshelter_get_textareahtml_output( $review['desc'] ). '</div>';
                        }
                        //
                        if( ! empty( $review['label'] ) ) {
                            echo animalshelter_heading_tag(
                                array(
                                    'tag'  => 'h4',
                                    'text' => esc_html( $review['label'] ),
                                )
                            ); 
                        }
                        //
                        if( ! empty( $review['desiganation'] ) ) {
                            echo animalshelter_paragraph_tag(
                                array(
                                    'text' => esc_html( $review['desiganation'] )
                                )
                            );
                        }
                        ?>
                    </div>
                    <?php
                        endforeach; 
                    endif;
                    ?>
                </div>
            </div>
        </div>  
    </section>

    <?php

    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            
            // owlCarousel
            $('.active-testimonial-carusel').owlCarousel({
                items: 3,
                loop: true,
                margin: 30,
                dots: true,
                autoplay: true,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                    961: {
                        items: 3,
                    }
                }
            });

        })(jQuery);
        </script>
        <?php 
        }
    }
	
}
