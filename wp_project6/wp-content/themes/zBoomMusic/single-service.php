<?php /* Template Name: Service Single page */ ?>

<?php get_header();?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">

				<?php 
				$sql = new WP_Query(array(
					'post_type'=> 'service'
					
				));
				if($sql->have_posts()) :
					while ($sql->have_posts()): $sql->the_post();					
			?>
       
					<article>
						<?php the_post_thumbnail();?>
						
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