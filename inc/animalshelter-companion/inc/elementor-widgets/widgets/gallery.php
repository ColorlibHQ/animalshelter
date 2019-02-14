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
class Animalshelter_Gallery extends Widget_Base {

	public function get_name() {
		return 'animalshelter-gallery';
	}

	public function get_title() {
		return __( 'Gallery', 'animalshelter-companion' );
	}

	public function get_icon() {
		return 'eicon-gallery-grid';
	}

	public function get_categories() {
		return [ 'animalshelter-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();
        // ----------------------------------------  Features Section Heading ------------------------------
        $this->start_controls_section(
            'features_heading',
            [
                'label' => __( 'Features Section Heading', 'animalshelter-companion' ),
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

		// ----------------------------------------  Gallery content ------------------------------
		$this->start_controls_section(
			'gallery_content',
			[
				'label' => __( 'Gallery', 'animalshelter-companion' ),
			]
		);
		$this->add_control(
            'gallery_slider', [
                'label' => __( 'Create Gallery', 'animalshelter-companion' ),
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
                        'name'  => 'col',
                        'label' => __( 'Column', 'animalshelter-companion' ),
                        'type'  => Controls_Manager::SELECT,
                        'options' => [
                            '12' => 'Column 12',
                            '11' => 'Column 11',
                            '10' => 'Column 10',
                            '9' => 'Column 9',
                            '8' => 'Column 8',
                            '7' => 'Column 7',
                            '6' => 'Column 6',
                            '5' => 'Column 5',
                            '4' => 'Column 4',
                            '3' => 'Column 3',
                            '2' => 'Column 2',
                            '1' => 'Column 1',
                        ]
                    ],
                    [
                        'name'  => 'img',
                        'label' => __( 'Photo', 'animalshelter-companion' ),
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
                'default'   => '#333333',
                'selectors' => [
                    '{{WRAPPER}} .title h1' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'color_sectsubtitle', [
                'label'     => __( 'Section Sub Title Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777',
                'selectors' => [
                    '{{WRAPPER}} .title p' => 'color: {{VALUE}};',
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
                'selector' => '{{WRAPPER}} .project-area .overlay-bg',
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
                'selector' => '{{WRAPPER}} .project-area',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    // call load widget script
    $this->load_widget_script();

    ?>
    
    <section class="project-area section-gap" id="project">
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
                <?php 
                if( is_array( $settings['gallery_slider'] ) && count( $settings['gallery_slider'] ) > 0 ):

                    foreach( $settings['gallery_slider'] as $gallery ):

                    // Member Picture
                    $bgUrl = '';
                    if( ! empty( $gallery['img']['url'] ) ) {
                        $bgUrl = $gallery['img']['url'];
                    }

                    // Column
                    $col = '6';
                    if( ! empty( $gallery['col'] ) ) {
                        $col = $gallery['col'];
                    }

                ?>
                    <div class="col-lg-<?php echo esc_attr( $gallery['col'] ); ?> col-md-<?php echo esc_attr( $col ); ?>">
                        <a href="<?php echo esc_url( $bgUrl ); ?>" class="img-gal">
                            <?php 
                            echo animalshelter_img_tag(
                                array(
                                    'url'   => esc_url( $bgUrl ),
                                    'class' => 'img-fluid single-project'
                                )
                            );
                            ?>
                        </a>
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

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            
        // Exibition widget owlCarousel
        $('.active-gallery').owlCarousel({
            items:6,
            loop:true,
            dots: true,
            autoplay:true,    
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
                    items: 6,
                }

            }
        });

        })(jQuery);
        </script>
        <?php 
        }
    }
	
}
