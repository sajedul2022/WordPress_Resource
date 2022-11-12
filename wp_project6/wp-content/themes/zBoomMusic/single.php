<?php get_header();?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">

				<?php if(have_posts()) :
					while (have_posts()) : 
						the_post();
           
    			?>
       
					<article>
						<?php the_post_thumbnail();?>
						<!-- <img src="<?php echo get_template_directory_uri()?>/images/img1.png"/> -->
						<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
						<div class="info">[By <?php the_author()?> on <?php the_time( 'F j, Y' );?> with <a href="#"><?php comments_number( '1 Comment', '1 Comment', '% comments' )?></a>]</div>
						<p><?php the_content();?></p>
					</article>

				<?php 
						endwhile;
					endif;
				?>
					
					
				</div>
			</div>

			<!-- sidebar  -->

			<?php get_sidebar()?>

		</div>
	</div>
</section>
<!--------------Footer--------------->

<?php get_footer();?>