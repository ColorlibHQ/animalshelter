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
class Animalshelter_Animals extends Widget_Base {

	public function get_name() {
		return 'animalshelter-animals';
	}

	public function get_title() {
		return __( 'Animals', 'animalshelter-companion' );
	}

	public function get_icon() {
		return 'eicon-logo';
	}

	public function get_categories() {
		return [ 'animalshelter-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        
		// ----------------------------------------  Animals List content ------------------------------
		$this->start_controls_section(
			'animals_content',
			[
				'label' => __( 'Animals List', 'animalshelter-companion' ),
			]
		);
		$this->add_control(
            'animals', [
                'label' => __( 'animals', 'animalshelter-companion' ),
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
                        'name'  => 'url',
                        'label' => __( 'Url', 'animalshelter-companion' ),
                        'type'  => Controls_Manager::TEXT,
                        'default' => '#'
                    ],
                    [
                        'name'  => 'img',
                        'label' => __( 'Animals', 'animalshelter-companion' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                ],
            ]
		);

		$this->end_controls_section(); // End

        //------------------------------ Style  ------------------------------
        $this->start_controls_section(
            'style_btn', [
                'label' => __( 'Style Button', 'animalshelter-companion' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_title', [
                'label'     => __( 'Title Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .single-cat-list a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_titlehover', [
                'label'     => __( 'Title Hover Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .single-cat-list a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section(); // End

	}

	protected function render() {

    $settings = $this->get_settings();

    ?>
    <section class="cat-list-area section-gap">
        <div class="container">
            <div class="row">
                <?php 
                if( ! empty( $settings['animals'] ) ):
                    foreach( $settings['animals'] as $animals ):

                $bgUrl = '';
                if( !empty( $animals['img']['url'] ) ){
                    $bgUrl = $animals['img']['url'];
                }

                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="single-cat-list">
                        <?php 
                        echo animalshelter_img_tag(
                            array(
                                'url'   => esc_url( $bgUrl ),
                                'class' => esc_attr( 'img-fluid' )
                            )
                        );
                        ?>
                        <div class="overlay">
                        <?php
                        if( ! empty( $animals['label'] ) ) {
                            echo '<div class="text"><a href="'. esc_url( $animals['url'] ) .'">'. esc_html( $animals['label'] ).'</a></div>';
                        }
                        ?>
                        </div>
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
