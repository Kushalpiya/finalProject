<?php
    function final_styles(){


  
 

     
        wp_register_style('fonts', get_template_directory_uri() . '/assets/css/fontawesome.min.css');
        wp_register_style('line', get_template_directory_uri() . '/assets/css/themify-icons.css');
        wp_register_style('elegant', get_template_directory_uri() . '/assets/css/elegant-line-icons.css');
        wp_register_style('elegantfont', get_template_directory_uri() . '/assets/css/elegant-font-icons.css');
        wp_register_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
        wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css');
        wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
        wp_register_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
        wp_register_style('odometer', get_template_directory_uri() . '/assets/css/odometer.min.css');
        wp_register_style('venobox', get_template_directory_uri() . '/assets/css/venobox/venobox.css');
        wp_register_style('owlcarousel', get_template_directory_uri() . '/assets/css/owl.carousel.css');
        wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css');
        wp_register_style('lunar', get_template_directory_uri() . '/assets/css/lunar.css');
        wp_register_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
         wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');

     
        wp_enqueue_style('style');
        wp_enqueue_style('fonts');
        wp_enqueue_style('line');
        wp_enqueue_style('elegant');
        wp_enqueue_style('elegantfont');
        wp_enqueue_style('flaticon');
        wp_enqueue_style('animate');
        wp_enqueue_style('bootstrap');
        wp_enqueue_style('slick');
        wp_enqueue_style('odometer');
        wp_enqueue_style('venobox');
        wp_enqueue_style('owlcarousel');
        wp_enqueue_style('main');
        wp_enqueue_style('lunar');
        wp_enqueue_style('swiper');
        wp_enqueue_style('responsive');

          
        wp_register_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array('jquery'), false, true);
        wp_register_script('tether', get_template_directory_uri() . '/assets/js/vendor/tether.min.js', array('jquery'), false, true);
        wp_register_script('headroom', get_template_directory_uri() . '/assets/js/vendor/headroom.min.js', array('jquery'), false, true);
        wp_register_script('owlcarousel', get_template_directory_uri() . '/assets/js/vendor/owl.carousel.min.js', array('jquery'), false, true);
        wp_register_script('smooth-scroll', get_template_directory_uri() . '/assets/js/vendor/smooth-scroll.min.js', array('jquery'), false, true);
        wp_register_script('venobox', get_template_directory_uri() . '/assets/js/vendor/venobox.min.js', array('jquery'), false, true);
        wp_register_script('ajaxchimp', get_template_directory_uri() . '/assets/js/vendor/jquery.ajaxchimp.min.js', array('jquery'), false, true);
        wp_register_script('slick', get_template_directory_uri() . '/assets/js/vendor/slick.min.js', array('jquery'), false, true);
        wp_register_script('waypoints', get_template_directory_uri() . '/assets/js/vendor/waypoints.min.js', array('jquery'), false, true);
        wp_register_script('odometer', get_template_directory_uri() . '/assets/js/vendor/odometer.min.js', array('jquery'), false, true);
        wp_register_script('wow', get_template_directory_uri() . '/assets/js/vendor/wow.min.js', array('jquery'), false, true);
        wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true);
        wp_register_script('lunar', get_template_directory_uri() . '/assets/js/lunar.js', array('jquery'), false, true);
        wp_register_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), false, true);
            wp_register_script('swiper', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array('jquery'), false, true);
       

        wp_enqueue_script('jquery');
        wp_enqueue_script('tether');
        wp_enqueue_script('headroom');
        wp_enqueue_script('owlcarousel');
        wp_enqueue_script('smooth-scroll');
        wp_enqueue_script('venobox');
        wp_enqueue_script('ajaxchimp');
        wp_enqueue_script('slick');
        wp_enqueue_script('waypoints');
        wp_enqueue_script('odometer');
        wp_enqueue_script('wow');
        wp_enqueue_script('main');
        wp_enqueue_script('lunar');
        wp_enqueue_script('swiper');
    }

    


    add_action('wp_enqueue_scripts', 'final_styles');
?>
