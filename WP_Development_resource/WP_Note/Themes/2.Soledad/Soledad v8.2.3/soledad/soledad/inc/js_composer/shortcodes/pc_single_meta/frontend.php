<?php
$settings      = vc_map_get_attributes( $this->getShortcode(), $atts );
$css_class     = vc_shortcode_custom_css_class( $settings['css'] );
$block_id      = Penci_Vc_Helper::get_unique_id_block( 'pc_single_meta' );
$css_custom    = '';
$hide_readtime = $settings['penci_single_hreadtime'];
$avatar        = $settings['penci_single_author_avatar'];
$avatarw       = isset( $settings['penci_avatar_w'] ) && $settings['penci_avatar_w'] ? $settings['penci_avatar_w'] : 32;
$icon_style    = $settings['meta_icon_style'];
$label_text    = $settings['hide_meta_label'];
global $post;
?>
    <div id="<?php echo $block_id; ?>"
         class="post-box-meta-single style-<?php echo esc_attr( $icon_style . ' ' . $css_class ); ?>">
		<?php if ( ! $settings['penci_single_meta_author'] ) :
			?>
            <span class="author-post byline">
                    <span class="author vcard">
	                    <?php if ( ! $label_text ) {
		                    echo penci_get_setting( 'penci_trans_written_by' );
	                    } ?>
                        <a class="author-url url fn n"
                           href="<?php echo get_author_posts_url( $post->post_author ); ?>">
                            <?php
                            if ( ! $avatar ) {
	                            echo get_avatar( $post->post_author, $avatarw );
                            }
                            echo get_the_author_meta( 'display_name', $post->post_author ); ?>
                        </a>
                    </span>
                </span>
		<?php endif; ?>
		<?php if ( ! $settings['penci_single_meta_date'] ) : ?>
            <span class="pctmp-date-post">
				<?php penci_soledad_time_link( 'single' ); ?></span>
		<?php endif; ?>
		<?php if ( ! $settings['penci_single_meta_comment'] ) :
			?>
            <span class="pctmp-comment-post">
            <?php
            $comment_text  = ! $label_text ? ' ' . penci_get_setting( 'penci_trans_comment' ) : '';
            $comments_text = ! $label_text ? ' ' . penci_get_setting( 'penci_trans_comments' ) : '';
            ?>
            <?php comments_number( '0' . $comment_text, '1' . $comment_text, '%' . $comments_text ); ?></span>
		<?php endif; ?>
		<?php if ( ! $settings['penci_single_show_cview'] ) : ?>
            <span class="pctmp-view-post">
                <i class="penci-post-countview-number"><?php echo penci_get_post_views( get_the_ID() ); ?></i><?php if ( ! $label_text ) {
					echo ' ' . penci_get_setting( 'penci_trans_countviews' );
				} ?></span>
		<?php endif; ?>
		<?php if ( penci_isshow_reading_time( $hide_readtime ) ):
			?>
            <span class="single-readtime">
            <?php penci_reading_time(); ?></span>
		<?php endif; ?>
    </div>
<?php
$css = [
	'meta-color'                       => [
		'{{WRAPPER}} .post-box-meta-single, {{WRAPPER}} .post-box-meta-single span' => 'color:{{VALUE}}'
	],
	'penci_single_meta_gnr_icon_color' => [ '{{WRAPPER}} .pcmt-icon' => 'color:{{VALUE}}' ],
	'penci_single_meta_gnr_bg_color'   => [
		'{{WRAPPER}} .pcmt-icon'                                       => 'background-color:{{VALUE}}',
		'{{WRAPPER}} .post-box-meta-single.style-s3 .pcmt-icon:after'  => 'border-left-color:{{VALUE}} !important',
		'{{WRAPPER}} .post-box-meta-single.style-s4 .pcmt-icon:before' => 'border-left-color:{{VALUE}} !important',

	],
	'meta-link-color'                  => [
		'{{WRAPPER}} .post-box-meta-single a' => 'color:{{VALUE}}'
	],
	'meta-link-hcolor'                 => [
		'{{WRAPPER}} .post-box-meta-single a:hover' => 'color:{{VALUE}}'
	],
	'meta-author-color'                => [ '{{WRAPPER}} .author-post,{{WRAPPER}} .author-post .author' => 'color:{{VALUE}}' ],
	'meta-author-lcolor'               => [ '{{WRAPPER}} .author-post a' => 'color:{{VALUE}}' ],
	'meta-author-hcolor'               => [ '{{WRAPPER}} .author-post a:hover' => 'color:{{VALUE}}' ],
	'meta-pdate-color'                 => [ '{{WRAPPER}} .pctmp-date-post' => 'color:{{VALUE}} !important' ],
	'meta-pcomment-color'              => [ '{{WRAPPER}} .pctmp-comment-post' => 'color:{{VALUE}} !important' ],
	'meta-pview-color'                 => [ '{{WRAPPER}} .pctmp-view-post' => 'color:{{VALUE}} !important' ],
	'meta-preading-color'              => [ '{{WRAPPER}} .single-readtime' => 'color:{{VALUE}} !important' ],
];
penci_wpbakery_el_extract_css( $css, $settings, '#' . $block_id );
