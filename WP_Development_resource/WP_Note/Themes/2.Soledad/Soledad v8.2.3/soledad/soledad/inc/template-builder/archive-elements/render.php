<?php
add_filter( 'body_class', function ( $class ) {
	$class[] = 'pccustom-template-enable';

	return $class;
} );
get_header(); ?>
<div class="container-archive-page">
    <div id="main" class="penci-custom-archive-template">
		<?php
		$post_name = penci_should_render_archive_template();
		$post_data = get_page_by_path( $post_name, OBJECT, 'archive-template' );
		if ( ! empty( $post_data ) && isset( $post_data->ID ) ) {

			if ( class_exists( '\Elementor\Plugin' ) && did_action( 'elementor/loaded' ) && \Elementor\Plugin::$instance->documents->get( $post_data->ID )->is_built_with_elementor() ) {
				$frontend = \Elementor\Plugin::$instance->frontend;

				add_action( 'wp_enqueue_scripts', array( $frontend, 'enqueue_styles' ) );
				add_action( 'wp_head', array( $frontend, 'print_fonts_links' ) );
				add_action( 'wp_footer', array( $frontend, 'wp_footer' ) );

				add_action( 'wp_enqueue_scripts', array( $frontend, 'register_scripts' ), 5 );
				add_action( 'wp_enqueue_scripts', array( $frontend, 'register_styles' ), 5 );

				$html = $frontend->get_builder_content_for_display( $post_data->ID, true );

				add_filter( 'get_the_excerpt', array( $frontend, 'start_excerpt_flag' ), 1 );
				add_filter( 'get_the_excerpt', array( $frontend, 'end_excerpt_flag' ), 20 );

				echo $html;
			} else {
				$builder_content = get_post( $post_data->ID );
				echo '<div class="js-composer-content">';
				echo do_shortcode( $builder_content->post_content );

				$shortcodes_custom_css = get_post_meta( $post_data->ID, '_wpb_shortcodes_custom_css', true );

				echo '<style data-type="vc_shortcodes-custom-css">';
				if ( ! empty( $shortcodes_custom_css ) ) {
					echo $shortcodes_custom_css;
				}
				echo '</style>';
				echo '</div>';
			}
		}
		?>
    </div>
</div>
<?php get_footer(); ?>
