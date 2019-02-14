(function ($) {
    'use strict';

    //  Mailchimp ajax
    $('#mc_embed_signup').find('form').ajaxChimp();


    $('.img-gal').magnificPopup({
        type: 'image',
        gallery:{
        enabled:true
        }
    });

    $('.play-btn').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });


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


    // volunteer form ajax

    $( '#volunteersubmit' ).on( 'submit', function() {

        var formData = $( this ).serializeArray();

        $.ajax({
            type: 'post',
            url: ajax_object.ajax_url,
            data: {
                action: 'animalshelter_booking_form_data',
                data: formData

            },
            success: function( res ){
                console.log( res );

                $('.submit-info').html( res );
            }

        }); 

        return false;

    } );



})(jQuery);