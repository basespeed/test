jQuery( document ).ready( function($) {
    'use strict';

    jQuery('.vk-page-testimonial .vk-btn').click(function ($) {
        var num_tes = jQuery('.vk-testimonial-list  .item').length;
        var num_tes1 = jQuery('.vk-testimonial-list  .col-md-12').length;
        var num_tes2 = jQuery('.vk-testimonial-list  .col-md-6').length;
        var num_tes3 = jQuery('.vk-testimonial-list  .col-md-4').length;
        var num_tes4 = jQuery('.vk-testimonial-list  .col-md-3').length;

        jQuery.ajax({
            url: Ajax_Testimonial.ajaxurl_testimonial,
            type: 'post',
            data: { action: 'ajax_loadmore_data_testimonial', 'num_tes' : num_tes , 'num_tes1' : num_tes1 , 'num_tes2' : num_tes2 , 'num_tes3' : num_tes3 , 'num_tes4' : num_tes4},
            success: function( respond ) {
                var $newItems = jQuery(respond);
                jQuery('.vk-testimonial-list').append( $newItems ).isotope( 'insert', $newItems );
                console.log(num_tes);
            }

        });

        return false;
    });

});