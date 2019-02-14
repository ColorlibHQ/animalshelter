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
 * Animalshelter elementor Team Member section widget.
 *
 * @since 1.0
 */
class Animalshelter_Volunteer_Form extends Widget_Base {

	public function get_name() {
		return 'animalshelter-volunteer';
	}

	public function get_title() {
		return __( 'Volunteer Form', 'animalshelter-companion' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'animalshelter-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Volunteer Section Heading ------------------------------
        $this->start_controls_section(
            'volunteer_heading',
            [
                'label' => __( 'Volunteer Section Heading', 'animalshelter-companion' ),
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
        
		// ----------------------------------------   Features content ------------------------------
		$this->start_controls_section(
			'volunteer_block',
			[
				'label' => __( 'Features', 'animalshelter-companion' ),
			]
		);
		$this->add_control(
            'features_content', [
                'label' => __( 'Create Features', 'animalshelter-companion' ),
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
                        'name'  => 'desc',
                        'label' => __( 'Descriptions', 'animalshelter-companion' ),
                        'type'  => Controls_Manager::TEXTAREA,
                    ],
                    [
                        'name'  => 'btn_text',
                        'label' => __( 'Button Text', 'animalshelter-companion' ),
                        'type'  => Controls_Manager::TEXT,
                        'default' => esc_html__( 'View Details', 'animalshelter-companion' )
                    ],
                    [
                        'name'  => 'btn_url',
                        'label' => __( 'Button Url', 'animalshelter-companion' ),
                        'type'  => Controls_Manager::TEXT,
                    ],
                    [
                        'name'  => 'img',
                        'label' => __( 'Img', 'animalshelter-companion' ),
                        'type'  => Controls_Manager::MEDIA,
                    ],
                ],
            ]
		);

		$this->end_controls_section(); // End features content


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

        //------------------------------ Style Features ------------------------------
        $this->start_controls_section(
            'style_features', [
                'label' => __( 'Style Features', 'animalshelter-companion' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'features_title_heading',
            [
                'label'     => __( 'Style Feature Title ', 'animalshelter-companion' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'color_featuretitle', [
                'label' => __( 'Title Color', 'animalshelter-companion' ),
                'type'  => Controls_Manager::COLOR,
                'default' => '#222222',
                'selectors' => [
                    '{{WRAPPER}} .single-cat h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        //
        $this->add_control(
            'features_fonticon_heading',
            [
                'label'     => __( 'Style Font Icon', 'animalshelter-companion' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'color_fonticon', [
                'label'     => __( 'Font Icon Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#A7A7A7',
                'selectors' => [
                    '{{WRAPPER}} .single-cat .fa' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_fonthovericon', [
                'label'     => __( 'Font Icon Hover Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .cat-area .hb-facebook-inv:hover .fa' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'fontsize',
            [
                'label' => __( 'Icon Font Size', 'animalshelter-companion' ),
                'type'  => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default'  => [
                    'unit' => 'px',
                    'size' => 18,
                ],
                'selectors' => [
                    '{{WRAPPER}} .single-cat .fa' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Text_Shadow::get_type(), [
                'name'      => 'text_shadow_fonticon',
                'selector'  => '{{WRAPPER}} .single-cat .fa',
            ]
        );

        //
        $this->add_control(
            'features_desc_heading',
            [
                'label'     => __( 'Style Descriptions', 'animalshelter-companion' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'color_desc', [
                'label'     => __( 'Descriptions Color', 'animalshelter-companion' ),
                'type'      => Controls_Manager::COLOR,
                'default' => '#777777',
                'selectors' => [
                    '{{WRAPPER}} .single-cat p' => 'color: {{VALUE}};',
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
                'selector' => '{{WRAPPER}} .cat-area .overlay-bg',
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
                'selector' => '{{WRAPPER}} .cat-area',
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();

    ?>

    <section class="Volunteer-form-area section-gap">
        <div class="container">
            <?php 
            // Section Heading
            animalshelter_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
            ?>

            <div class="row justify-content-center">
                <form action="#" method="post" id="volunteersubmit" class="col-lg-9">
                  <div class="form-group">
                    <label for="first-name"><?php esc_html_e( 'First Name', 'animalshelter-companion' ); ?></label>
                    <input type="text" name="First_Name" class="form-control" placeholder="<?php esc_attr_e( 'First Name', 'animalshelter-companion' ) ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="last-name"><?php esc_html_e( 'Last Name', 'animalshelter-companion' ); ?></label>
                    <input type="text" name="Last_Name" class="form-control" placeholder="<?php esc_attr_e( 'Last Name', 'animalshelter-companion' ) ?>" required>
                  </div>                          
                  <div class="form-group">
                    <label for="Address"><?php esc_html_e( 'Address', 'animalshelter-companion' ); ?></label>
                    <input type="text" name="Address" class="form-control mb-20" placeholder="<?php esc_attr_e( 'Your Address', 'animalshelter-companion' ) ?>" required>
                  </div>                          
                  <div class="form-row">
                    <div class="col-6 mb-30">
                        <label for="City"><?php esc_html_e( 'City', 'animalshelter-companion' ); ?></label>
                        <input type="text" name="City" class="form-control" placeholder="City" required>
                    </div>
                    <div class="col-6 mb-30">
                        <label for="state"><?php esc_html_e( 'State', 'animalshelter-companion' ); ?></label>
                        <input type="text" name="State" class="form-control" placeholder="<?php esc_attr_e( 'State', 'animalshelter-companion' ) ?>" required>
                        <div class="select-option" id="service-select"">
                        </div>                              
                    </div>                          
                    <div class="col-6 mb-30">
                        <label for="Country"><?php esc_html_e( 'Country', 'animalshelter-companion' ); ?></label>
                        <input type="text" name="Country" class="form-control" placeholder="<?php esc_attr_e( 'Country', 'animalshelter-companion' ); ?>" required>
                    </div>
                    <div class="col-6 mb-30">
                        <label for="postal-code"><?php esc_html_e( 'Postal code', 'animalshelter-companion' ); ?></label>
                        <input type="text" name="Postal_code" class="form-control" placeholder="<?php esc_attr_e( 'Postal code', 'animalshelter-companion' ); ?>">                              
                    </div>                          
                    <div class="col-6 mb-30">
                        <label for="email"><?php esc_html_e( 'Email Address', 'animalshelter-companion' ); ?></label>
                        <input type="email" class="form-control" name="Email_Address" placeholder="<?php esc_attr_e( 'Email Address', 'animalshelter-companion' ); ?>" required>
                    </div>
                    <div class="col-6 mb-30">
                        <label for="phone"><?php esc_html_e( 'Phone Number', 'animalshelter-companion' ); ?></label>
                        <input type="phone" class="form-control" name="Phone_Number" placeholder="<?php esc_attr_e( 'Phone Number', 'animalshelter-companion' ); ?>">                                
                    </div>
                  </div>        

                  <fieldset class="form-group">
                    <label for="day"><?php esc_html_e( 'Which days you can be volunteer?', 'animalshelter-companion' ); ?></label>
                    <div class="form-group ">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="Available_days" id="inlineRadio1" value="Monday"> <?php esc_html_e( 'Monday', 'animalshelter-companion' ); ?>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="Available_days" id="inlineRadio2" value="Tuesday"> <?php esc_html_e( 'Tuesday', 'animalshelter-companion' ); ?>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="Available_days" id="inlineRadio3" value="Wednesday"> <?php esc_html_e( 'Wednesday', 'animalshelter-companion' ); ?>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="Available_days" id="inlineRadio2" value="Thursday"> <?php esc_html_e( 'Thursday', 'animalshelter-companion' ); ?>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="Available_days" id="inlineRadio2" value="Friday"> <?php esc_html_e( 'Friday', 'animalshelter-companion' ); ?>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="Available_days" id="inlineRadio2" value="Saturday"> <?php esc_html_e( 'Saturday', 'animalshelter-companion' ); ?>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="Available_days" id="inlineRadio2" value="Sunday"> <?php esc_html_e( 'Sunday', 'animalshelter-companion' ); ?>
                            </label>
                        </div>                                
                    </div>
                  </fieldset>
                  <div class="form-group">
                    <label for="note"><?php esc_html_e( 'Volunteer Note', 'animalshelter-companion' ); ?></label>
                    <textarea class="form-control" id="exampleTextarea" name="Volunteer_Note" rows="5" placeholder="<?php esc_attr_e( 'Write message', 'animalshelter-companion' ); ?>"></textarea>
                  </div>                          
                  <button type="submit" name="volsubmit" class="primary-btn float-right"><?php esc_html_e( 'Send Request', 'animalshelter-companion' ); ?></button>
                  <div class="submit-info" style="display: inline-block;"></div>
                </form>
            </div>
        </div>  
    </section>

    <?php

    }

	
}
