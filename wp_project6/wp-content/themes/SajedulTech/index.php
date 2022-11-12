<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="style.css"> -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
	<title>WP Development</title>
</head>
<body>
	<div class="container">
		<h1>Blog Page</h1>

		<?php
			if (have_posts() ) :
				while(have_posts()) :
					  the_post();

					echo "<div class=\"article\">";  ?>

						<a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
						<?php 
						echo "<br>";
						the_post_thumbnail();
						the_content();
					echo "</div>";
					echo "<hr>";
				endwhile;
				
			endif;
		?>

	</div>
</body>
</html>
