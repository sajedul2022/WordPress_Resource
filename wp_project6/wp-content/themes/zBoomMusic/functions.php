<?php 
// Add Theme Support
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');





// css add
    function custom_theme_style(){
        wp_enqueue_style( 'sajedul', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'custom_theme_style');


// Add menu Register

    function custom_register_navmenu (){
        register_nav_menus( array(
            'primary_menu' => __('Primary Menu', 'sajedulblog'),
            'footer_menu' => __('Footer Menu', 'sajedulblog'),
        ));
    }
    add_action('after_setup_theme', 'custom_register_navmenu' );

// Register Sidebar

    function custom_reg_sidebar(){
        register_sidebar(array(

            'name'          => 'Right Sidebar',
            'id'            => 'right-sb',
            'description'   => 'Sidebar is shown on the Right hand side',
            'before_widget' => '<div class="box">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<div class="heading"><h2>',
            'after_title'   => '</h2></div><div class="content">'
        ));

        register_sidebar(array(

            'name'          => 'Footer Sidebar',
            'id'            => 'footer-sb',
            'description'   => 'Sidebar is shown on the Footer hand side',
            'class'         => '',
            'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="box">',
            'after_widget'  => '</div></div></div></div>',
            'before_title'  => '<div class="heading"><h2>',
            'after_title'   => '</h2></div><div class="content">'
        ));

        register_sidebar(array(

            'name'          => 'Home Sidebar',
            'id'            => 'home-sb',
            'description'   => 'Home Sidebar is shown on the Footer hand side',
            'class'         => '',
            'before_widget' => '<div class="box">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<div class="heading"><h2>',
            'after_title'   => '</h2></div><div class="content">'
        ));
    } 

    add_action('widgets_init', 'custom_reg_sidebar');


// Disable Gutenberg editorDisables the block editor from  Gutenberg plugin.
    add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
    // Disables the block editor from managing widgets.
    add_filter( 'use_widgets_block_editor', '__return_false' );


// Excerpt post 
    function my_excerpt_length($length){ return 30; } 
    add_filter('excerpt_length', 'my_excerpt_length');

// Custom Post type for Slider

    function slider_post_type() {
        $args = array(
            'public'    => true,
            'label'     => __( 'Sliders', 'sajedulblog'),
            'menu_icon' => 'dashicons-book',
            'supports'           => array( 'title', 'author', 'thumbnail', 'template','custom-fields' ),
            
        );
        register_post_type( 'slider', $args );
    }
    add_action( 'init', 'slider_post_type' );

// Custom Post Services

function services_post_type() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Services', 'sajedulblog'),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        
        
    );
    register_post_type( 'service', $args );
}

add_action('init','services_post_type');


?>