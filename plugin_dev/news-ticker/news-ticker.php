<?php 
    /*
    Plugin Name: News Ticker
    Plugin URI: #
    Description: News Scrolling From custom Post Type.
    Version: 1.0
    Author: Sajedul Islam
    Author URI: #
    License: GPLv2 or later
    Text Domain: sajedulblog
    */

    // css, js, content 
    function News_ticker_enqueue(){
        wp_enqueue_style('newsT_css', plugins_url( 'css/eocjs-newsticker.css', __FILE__));
	    wp_enqueue_script('newsT_js', PLUGINS_URL('js/eocjs-newsticker.js', __FILE__), array(), '1.0.1', true);
	    wp_enqueue_script('custom_js', PLUGINS_URL('js/custom.js', __FILE__), array(), '1.0.1', true);

        // dynamic tricker loop

        $sql = new WP_Query(array(
            'post_type'=> 'tricker',
            'posts_per_page'=>3
        ));

        $content = '<div id="ticker">';

        if($sql->have_posts()):
            while($sql->have_posts()): $sql->the_post();
            $content .= get_the_title(). ' *** ';  
            endwhile;
        endif;

        return $content .= '</div>';

    }
        // add_action('wp_enqueue_scripts', 'News_ticker_enqueue');


    // Create add_shortcode
        add_shortcode('my_tricker', 'News_ticker_enqueue');


    // Custom post Tricker 

    function tricker_post_type() {
        $args = array(
            'public'    => true,
            'label'     => __( 'Breaking News', 'sajedulblog'),
            'menu_icon' => 'dashicons-media-text',
            'supports'           => array( 'title', 'author','custom-fields' ),
            
        );
        register_post_type( 'tricker', $args );
    }
    add_action( 'init', 'tricker_post_type' );




?>