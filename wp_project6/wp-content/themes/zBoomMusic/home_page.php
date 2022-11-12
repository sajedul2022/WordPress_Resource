<?php /* Template Name: home */ ?>
<?php get_header();?>

<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
					
					<?php 
						$sql = new WP_Query(array(
							'post_type'=> 'slider'
							
						));
						if($sql->have_posts()) :
							while ($sql->have_posts()): $sql->the_post();
								
					?>
						<li>
							<?php the_post_thumbnail();?>
							
						</li>
					
					<?php 
							endwhile;
						endif;
					?>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content services --------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">

			<?php 
				$sql = new WP_Query(array(
					'post_type'=> 'service'
					
				));
				if($sql->have_posts()) :
					while ($sql->have_posts()): $sql->the_post();					
			?>
				<div class="col-1-3">
					<div class="wrap-col box">
						<h2><?php the_title() ?></h2>
						<p><?php the_excerpt() ?></p>
						<div class="more"><a href="<?php the_permalink() ?>">[More]</a></div>
					</div>
				</div>

			<?php 
						endwhile;
					endif;
			?>
			
			
		</div>

		<!-- Blog -->
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>

					<?php 
						$sql = new WP_Query(array(
							'post_type'=> 'post',
							'posts_per_page' => 3
						));
						if($sql->have_posts()) :
							while ($sql->have_posts()): $sql->the_post();
								
					?>

						<article class="row">
							<div class="col-1-3">
								<div class="wrap-col">
									
									<?php the_post_thumbnail();?>
								</div>
							</div>
							<div class="col-2-3">
								<div class="wrap-col">
									<h2><a href="<?php the_permalink() ?>"><?php  the_title(); ?></a></h2>
									<div class="info">By <?php the_author() ?> on <?php the_time( 'd F Y' ); ?> with <a href="#"><?php comments_number('Two Comment', '2 comment', '% comments')?></a></div>
									<p><?php the_excerpt()?></p>
								</div>
							</div>
						</article>

					<?php 
							endwhile;
						endif;
					?>

					

				</div>
			</div>

			<!-- Dynamic Sidebar  -->

			<div class="col-1-3">
				<div class="wrap-col">

				<?php dynamic_sidebar('home-sb'); ?>
					<!-- <div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							<img src="images/albums.png"/>
						</div>
					</div>

					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
								</ul>
							</div>
						</div>
					</div> -->

				</div>
			</div>
		</div>
	</div>
</section>
	<!--------------Footer--------------->
	<?php get_footer();?>


</body>
</html>