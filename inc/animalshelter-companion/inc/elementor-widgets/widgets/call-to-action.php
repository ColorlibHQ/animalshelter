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
 * Animalshelter elementor call to action section widget.
 *
 * @since 1.0
 */
class Animalshelter_Cta extends Widget_Base {

	public function get_name() {
		return 'animalshelter-cta';
	}

	public function get_title() {
		return __( 'Call To Action', 'animalshelter-companion' );
	}

	public function get_icon() {
		return 'eicon-call-to-action';
	}

	public function get_categories() {
		return [ 'animalshelter-elements' ];
	}

	protected function _register_controls() {


        // ----------------------------------------  Call to action content ------------------------------
        $this->start_controls_section(
            'cta_content',
            [
                'label' => __( 'Call To Action Content', 'animalshelter-companion' ),
            ]
        );
        $this->add_control(
            'style',
            [
                'label' => esc_html__( 'Style', 'animalshelter-companion' ),
                'type' => Controls_Manager::SELECT2,
                'options' => [
                    'style1'    => __( 'Style 1', 'animalshelter-companion' ),
                    'style2'    => __( 'Style 2', 'animalshelter-companion' ),
                ],
                'default' => [ 'style1' ]      
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'animalshelter-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Please select your favourite pet', 'animalshelter-companion' )
            ]
        );
        $this->add_control(
            'desc',
            [
                'label' => esc_html__( 'Description', 'animalshelter-companion' ),
                'type' => Controls_Manager::WYSIWYG,
                'condition' => [
                    'style' => 'style2'
                ]
            ]
        );
        $this->add_control(
            'btnlabel',
            [
                'label' => esc_html__( 'Button #1 Label', 'animalshelter-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Fill Adoption Form', 'animalshelter-companion' )
            ]
        );
        $this->add_control(
            'btnurl',
            [
                'label' => esc_html__( 'Button #1 Url', 'animalshelter-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => ''
            ]
        );
        $this->add_control(
            'btnlabel2',
            [
                'label' => esc_html__( 'Button #2 Label', 'animalshelter-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Register now', 'animalshelter-companion' ),
                'condition' => [
                    'style' => 'style2'
                ]
            ]
        );
        $this->add_control(
            'btnurl2',
            [
                'label' => esc_html__( 'Button #2 Url', 'animalshelter-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => '',
                'condition' => [
                    'style' => 'style2'
                ]
            ]
        );


        $this->end_controls_section(); // End content

        /**
         * Style Tab
         * ------------------------------ Style ------------------------------
         *
         */
        $this->start_controls_section(
            'stylecolor', [
                'label' => __( 'Style Color', 'animalshelter-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_title', [
                'label'     => __( 'Title Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .calltoaction-bg h1'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_titlebold', [
                'label'     => __( 'Description Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .calltoaction-bg p' => 'color: {{VALUE}};',
                ],
            ]
        );


        $this->end_controls_section();        

        /**
         * Style Tab
         * ------------------------------ Button Style ------------------------------
         *
         */
        $this->start_controls_section(
            'buttonstyle', [
                'label' => __( 'Style Button', 'animalshelter-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_label', [
                'label'     => __( 'Label Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .calltoaction-bg .primary-btn'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_label', [
                'label'     => __( 'Hover Label Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .calltoaction-bg .primary-btn:hover'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_bg', [
                'label'     => __( 'Background Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .calltoaction-bg .primary-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_bg', [
                'label'     => __( 'Hover Background Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => 'rgba(250,183,0,0)',
                'selectors' => [
                    '{{WRAPPER}} .calltoaction-bg .primary-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_border', [
                'label'     => __( 'Border Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .calltoaction-bg .primary-btn' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_border', [
                'label'     => __( 'Hover Border Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .calltoaction-bg .primary-btn:hover' => 'border-color: {{VALUE}};',
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
                'default' => 'yes',
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
                'selector' => '{{WRAPPER}} .calltoaction-bg .overlay-bg',
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
                'selector' => '{{WRAPPER}} .calltoaction-bg',
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();


    $wrpClass = 'style2' != $settings['style'] ? 'callto-top-area calltoaction-bg section-gap' : 'calltoaction-area calltoaction-bg section-gap relative';
    ?>

    <section class="<?php echo esc_attr( $wrpClass ); ?>">
        <div class="container">
            <?php 
            // Style 1

            if( 'style2' != $settings['style'] ):
            ?>
            <div class="row justify-content-between callto-top-wrap pt-40 pb-40">
                <div class="col-lg-8 callto-top-left">
                    <?php 
                    if( ! empty( $settings['title'] ) ) {
                        echo animalshelter_heading_tag(
                            array(
                                'tag' => 'h1',
                                'text' => esc_html( $settings['title'] ),
                            )
                        );
                    }
                    ?>
                </div>
                <?php 
                // Button 
                if( !empty( $settings['btnlabel'] ) && ! empty( $settings['btnurl'] ) ) {
                    echo '<div class="col-lg-4 callto-top-right">';
                    echo animalshelter_anchor_tag(
                        array(
                            'text'   => esc_html( $settings['btnlabel'] ),
                            'url'    => esc_url( $settings['btnurl'] ),
                            'class'  => 'primary-btn',
                        )
                    );
                    echo '</div>';
                }
                ?>                     
            </div>
            <?php 
            // End Style 1

            else:
            // Style 2
            ?>
            <?php 
            if( ! empty( $settings['bg_overlay'] ) ) {
                echo '<div class="overlay overlay-bg"></div>';
            }
            ?>
            <div class="row align-items-center justify-content-center">
                <div class="col-sm-12">
                    <?php 
                    if( ! empty( $settings['title'] ) ) {
                        echo animalshelter_heading_tag(
                            array(
                                'tag' => 'h1',
                                'text' => esc_html( $settings['title'] ),
                            )
                        );
                    }
                    //
                    // Content
                    if( ! empty( $settings['desc'] ) ) {

                        echo animalshelter_get_textareahtml_output( $settings['desc'] );
                    }
                    ?>
                    <div class="buttons d-flex justify-content-center flex-row">
                        <?php 
                        // Button #1
                        if( !empty( $settings['btnlabel'] ) && ! empty( $settings['btnurl'] ) ) {
                            echo animalshelter_anchor_tag(
                                array(
                                    'text'   => esc_html( $settings['btnlabel'] ),
                                    'url'    => esc_url( $settings['btnurl'] ),
                                    'class'  => 'primary-btn text-uppercase',
                                )
                            );                
                        }
                        // Button #2
                        if( !empty( $settings['btnlabel2'] ) && ! empty( $settings['btnurl2'] ) ) {
                            echo animalshelter_anchor_tag(
                                array(
                                    'text'   => esc_html( $settings['btnlabel2'] ),
                                    'url'    => esc_url( $settings['btnurl2'] ),
                                    'class'  => 'primary-btn text-uppercase',
                                )
                            );                
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php 
            endif;
            // End Style 2
            ?>
        </div>  
    </section>


    <?php

        }
	
}
