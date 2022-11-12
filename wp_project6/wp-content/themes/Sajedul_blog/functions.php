<?php 

    // add theme support
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );



    // CSS add

    function add_custom_scripts(){
        wp_enqueue_style( 'sajedul', get_stylesheet_uri() );
    }

    add_action('wp_enqueue_scripts', 'add_custom_scripts');

    // register nav menus

    function register_my_menus() {
        register_nav_menus(
          array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
           )
         );
       }
       add_action( 'after_setup_theme', 'register_my_menus' );

    //    add sidebar

    function custom_widgets_add() {
 
            register_sidebar( array(
                'name' => __( 'Right Sidebar', 'sajedulblog' ),
                'id' => 'sidebar-1',
                'description' => __( 'The Right sidebar appears on the right on each page except the front page template', 'sajedulblog' ),
                'before_widget' => '<div id="sidebar">',
                'after_widget' => '</div>',
                
            ) );
     

        }
     
    add_action( 'widgets_init', 'custom_widgets_add' );


?>