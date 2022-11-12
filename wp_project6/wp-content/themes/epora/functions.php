<?php 

    // Add theme support

    add_theme_support('post-thumbnails');

    // bt walker for menu
    include_once('wp_walker.php');

    // Register menu
    function register_my_menus() {
        register_nav_menus(
          array(
            'main-menu' => __( 'Main menu' ),
            'category' => __( 'Categories  Menu' ),
            'footer-menu' => __( 'Footer Menu' )
           )
         );
    }
    add_action( 'after_setup_theme', 'register_my_menus' );


    // custom enqueue scripts

    function custom_enqueue(){
        // css 

        //wp_enqueue_style('string $handle', mixed $src, array $deps, mixed $ver, string $meida );
        wp_enqueue_style('bootstrap_css-epora', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '', 'all' );
        wp_enqueue_style('meanmenu-epora', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), '', 'all' ); 
        wp_enqueue_style('animate-epora', get_template_directory_uri() . '/assets/css/animate.css', array(), '', 'all' ); 
        wp_enqueue_style('slick-epora', get_template_directory_uri() . '/assets/css/slick.css', array(), '', 'all' ); 
        wp_enqueue_style('backtotop-epora', get_template_directory_uri() . '/assets/css/backtotop.css', array(), '', 'all' ); 
        wp_enqueue_style('magnific-epora', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '', 'all' ); 
        wp_enqueue_style('nice-epora', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '', 'all' ); 
        wp_enqueue_style('icon-epora', get_template_directory_uri() . '/assets/css/ui-icon.css', array(), '', 'all' ); 
        wp_enqueue_style('elegentfonts-epora', get_template_directory_uri() . '/assets/css/elegentfonts.css', array(), '', 'all' ); 
        wp_enqueue_style('awesome-epora', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', array(), '', 'all' ); 
        wp_enqueue_style('spacing-epora', get_template_directory_uri() . '/assets/css/spacing.css', array(), '', 'all' ); 
        wp_enqueue_style('style-epora', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' ); 
        wp_enqueue_style('my_css-epora', get_template_directory_uri() . '/style.css', array(), '', 'all' ); 
        
        // script js

        //wp_enqueue_style('string $handle', mixed $src, array $deps, mixed $ver, bol $in_footer );
        wp_enqueue_script('JQ-epora', get_template_directory_uri() . '/assets/js/vendor/jquery.js', array(), '3.6.0', 'true' );
        wp_enqueue_script('waypoints-epora', get_template_directory_uri() . '/assets/js/vendor/waypoints.js', array(), '', 'true' );
        wp_enqueue_script('bt_bundle-epora', get_template_directory_uri() . 'assets/js/bootstrap-bundle.js', array(), '3.6.0', 'true' );
        wp_enqueue_script('meanmenu-epora', get_template_directory_uri() . '/assets/js/meanmenu.js', array(), '3.6.0', 'true' );
        wp_enqueue_script('slick-epora', get_template_directory_uri() . '/assets/js/slick.js', array(), '3.6.0', 'true' );
        wp_enqueue_script('magnific-epora', get_template_directory_uri() . '/assets/js/magnific-popup.js', array(), '3.6.0', 'true' );
        wp_enqueue_script('parallax-epora', get_template_directory_uri() . '/assets/js/parallax.js', array(), '3.6.0', 'true' );
        wp_enqueue_script('backtotop-epora', get_template_directory_uri() . '/assets/js/backtotop.js', array(), '3.6.0', 'true' );
        wp_enqueue_script('nice-epora', get_template_directory_uri() . '/assets/js/nice-select.js', array(), '3.6.0', 'true' );
        wp_enqueue_script('counterup-epora', get_template_directory_uri() . '/assets/js/counterup.js', array(), '3.6.0', 'true' );
        wp_enqueue_script('wow-epora', get_template_directory_uri() . '/assets/js/wow.js', array(), '3.6.0', 'true' );
        wp_enqueue_script('isotope-epora', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array(), '3.6.0', 'true' );
        wp_enqueue_script('imagesloaded-epora', get_template_directory_uri() . '/assets/js/imagesloaded-pkgd.js', array(), '3.6.0', 'true' );
        wp_enqueue_script('ajax-epora', get_template_directory_uri() . '/assets/js/ajax-form.js', array(), '3.6.0', 'true' );
        wp_enqueue_script('main-epora', get_template_directory_uri() . '/assets/js/main.js', array(), '3.6.0', 'true' );
    }

    add_action('wp_enqueue_scripts', 'custom_enqueue');











?>