<?php 

// Theme support

    function my_theme_support(){

        add_theme_support('post-thumbnails');
        add_theme_support( 'title-tag' );
        add_theme_support( 'widgets' );

            // bloginfo('name');
            // bloginfo('description');
            // bloginfo( 'charset' );
    }
    add_action( 'after_setup_theme', 'my_theme_support' );


//  Menu

    function news_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'tnews'),
            'categories_menu' => __( 'Categories Menu', 'tnews'),
            'footer_menu'  => __( 'Footer Menu', 'tnews'),
        ) );
    }
    add_action( 'after_setup_theme', 'news_register_nav_menu');

    // Excerpt post 
        function my_excerpt_length($length){ return 30; } 

        add_filter('excerpt_length', 'my_excerpt_length');

    // Custom Post type for Slider

        function slider_post_type() {
            $args = array(
                'public'    => true,
                'label'     => __( 'Sliders', 'tnews'),
                'menu_icon' => 'dashicons-book',
                'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'template','custom-fields' )
                
            );
            register_post_type( 'slider', $args );
        }
        add_action( 'init', 'slider_post_type' );

    // Custom Post Services

    function services_post_type() {
        $args = array(
            'public'    => true,
            'label'     => __( 'Services', 'tnews'),
            'supports'           => array( 'title', 'author', 'thumbnail', 'template','custom-fields', 'editor' ),
        );
        register_post_type( 'service', $args );
    }

    add_action('init','services_post_type');









/**  Add your scripts and styles*/

// function news_load_scripts() {
    
//    // css File
//    wp_enqueue_style( 'bootstrap-tnews', get_template_directory_uri(). '/assets/css/bootstrap.min.css');
//    wp_enqueue_style( 'awesome-tnews', get_template_directory_uri(). '/assets/css/font-awesome.min.css');
//    wp_enqueue_style( 'animate-tnews', get_template_directory_uri(). '/assets/css/animate.css');
//    wp_enqueue_style( 'font-tnews', get_template_directory_uri(). '/assets/css/font.css');
//    wp_enqueue_style( 'scroller-tnews', get_template_directory_uri(). '/assets/css/li-scroller.css');
//    wp_enqueue_style( 'slick-tnews', get_template_directory_uri(). '/assets/css/slick.css');
//    wp_enqueue_style( 'fancybox-tnews', get_template_directory_uri(). '/assets/css/jquery.fancybox.css');
//    wp_enqueue_style( 'theme-tnews', get_template_directory_uri(). '/assets/css/theme.css');
//    wp_enqueue_style( 'style-tnews', get_template_directory_uri(). '/assets/css/style.css');
//    wp_enqueue_style( 'customStyle-tnews', get_template_directory_uri(). '/assets/css/customStyle.css');
//    wp_enqueue_style( 'mystyle', get_stylesheet_uri() );


//    // JS file
   
//    wp_enqueue_script( 'jq-tnews', get_template_directory_uri() . '/assets/js/vendor/jquery.js', array(), '3.6.0', true);
   

    
// }
    add_action('wp_enqueue_scripts', 'news_load_scripts');



    // Disables the block editor from managing widgets in the Gutenberg plugin.

   add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );

    // Disables the block editor from managing widgets.
   add_filter( 'use_widgets_block_editor', '__return_false' );



// widgets

    function zboom_widgets_init() {
     register_sidebar( array(
        'name' => __( 'Right Sidebar', 'tnews' ),
        'id' => 'sidebar-1',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'tnews' ),
        'before_widget' => '<div class="col-1-3"><div class="wrap-col">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="box"><div class="heading"><h2>',
        'after_title' => '</h2></div><div class="content">',
    ) );
     register_sidebar(array(
        'name' =>__( 'Footer sidebar', 'tnews'),
        'id' => 'sidebar-2',
        'description' => __( 'Appears on the static front page template', 'tnews' ),
        'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="box">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="heading"><h2>',   
        'after_title' => '</h2></div><div class="content">',
    ) );
    }
 
   add_action( 'widgets_init', 'zboom_widgets_init' );



?>



