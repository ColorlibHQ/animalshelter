/**
 * Notice for Elementor
 *
 * @package Animalshelter
 */

/* global animalshelterElementorNotice */

jQuery( document ).ready(
	function () {

			var style = '<style>.animalshelter-disable-elementor-styling{position:fixed;z-index:9999;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.8)}.animalshelter-elementor-notice-wrapper{position:fixed;top:50%;left:50%;max-width:380px;border-radius:6px;color:#6d7882;background-color:#fff;text-align:center;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.animalshelter-elementor-notice-body{padding:10px 20px;font-size:12px;line-height:1.5}.animalshelter-elementor-notice-header{padding:10px 0 20px;color:#6d7882;font-size:13px;font-weight:700}.animalshelter-elementor-notice-buttons{border-top:1px solid #e6e9ec}.animalshelter-elementor-notice-buttons>a{display:inline-block;width:50%;padding:13px 0;font-size:15px;font-weight:700;text-align:center}.animalshelter-elementor-notice-buttons>a.animalshelter-do-nothing{border-right:1px solid #e6e9ec;color:#6d7882}.animalshelter-elementor-notice-buttons>a.animalshelter-disable-default-styles{color:#9b0a46}</style>';

			var dialog = style + '<div class="animalshelter-disable-elementor-styling">' +
				'<div class="animalshelter-elementor-notice-wrapper">' +
					'<div class="animalshelter-elementor-notice-header">Animalshelter supports default styling for Elementor widgets</div>' +
					'<div class="animalshelter-elementor-notice-body">Do you want to disable Elementors\' default styles and use the theme defaults?</div>' +
					'<div class="animalshelter-elementor-notice-buttons">' +
						'<a href="#" class="animalshelter-do-nothing" data-reply="no">No</a>' +
						'<a href="#" class="animalshelter-disable-default-styles" data-reply="yes">Yes</a>' +
					'</div>' +
				'</div>' +
			'</div>';

			jQuery( 'body' ).prepend( dialog );
			jQuery( '.animalshelter-elementor-notice-buttons > a' ).on(
				'click', function() {

					var reply = jQuery( this ).data( 'reply' );

					jQuery.ajax(
						{
							url: animalshelterElementorNotice.ajaxurl,
							data: {
								reply: reply,
								nonce: animalshelterElementorNotice.nonce,
								action: 'elementor_desiable_default_style'
							},
							type: 'post',
							success: function () {

								if ( reply === 'yes' ) {
									parent.location.reload();
								} else {
									jQuery( '.animalshelter-disable-elementor-styling' ).fadeOut( 500, function() { jQuery( this ).remove(); } );
								}
							}
						}
					);
				}
			);
	}
);
