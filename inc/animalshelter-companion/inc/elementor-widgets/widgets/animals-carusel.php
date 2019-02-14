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
class Animalshelter_Animals_Carusel extends Widget_Base {

	public function get_name() {
		return 'animalshelter-animals-carusel';
	}

	public function get_title() {
		return __( 'Animals Carusel', 'animalshelter-companion' );
	}

	public function get_icon() {
		return 'eicon-logo';
	}

	public function get_categories() {
		return [ 'animalshelter-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        
		// ----------------------------------------  Animals Carusel Content ------------------------------
		$this->start_controls_section(
			'animals_carusel_content',
			[
				'label' => __( 'Animals Carusel', 'animalshelter-companion' ),
			]
		);
		$this->add_control(
            'caruselimg', [
                'label' => __( 'Animals Carusel', 'animalshelter-companion' ),
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
                        'name'  => 'img',
                        'label' => __( 'Image', 'animalshelter-companion' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                ],
            ]
		);

		$this->end_controls_section(); // End


	}

	protected function render() {

    $settings = $this->get_settings();

    $this->load_widget_script();

    ?>

    <section class="image-carusel-area">
        <div class="container">
            <div class="row">
                <div class="active-image-carusel">
                <?php 
                if( ! empty( $settings['caruselimg'] ) ):
                    foreach( $settings['caruselimg'] as $img ):

                $bgUrl = '';
                if( !empty( $img['img']['url'] ) ){
                    $bgUrl = $img['img']['url'];
                }

                ?>
                    <div class="single-image-carusel">
                        <?php 
                        echo animalshelter_img_tag(
                            array(
                                'url'   => esc_url( $bgUrl ),
                                'class' => esc_attr( 'img-fluid' )
                            )
                        );
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

    public function load_widget_script() {
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            $('.active-image-carusel').owlCarousel({
                items: 4,
                loop: true,
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
                    900: {
                        items: 4,
                    }

                }
            });
        })(jQuery);
        </script>
        <?php 
        }
    }
	
}
