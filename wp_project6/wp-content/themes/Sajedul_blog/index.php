  <?php get_header()?>



    <?php if(have_posts()) :
          while (have_posts()) : 
            the_post();
           
    ?>
            
    
  <div id="posts">
    <div class="post">
      <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?>  </a></h2>
      <p class="date"><?php the_time('F j, Y')?> by <?php  the_author();?> ( post ID: <?php the_id(); ?>)</p>
      <div class="entry">
        <p> <?php the_post_thumbnail();?> </p>

        <p><?php the_content();?></p>
        
      </p>
      </div>
      <div class="postmetadata"> <span class="tags"> <?php the_tags(); ?> <a href="#"><?php the_category();?></a>
        </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comments-no">
        <?php comments_number('no responses', '1 response', '%responses'); ?>
      <a href="#"></a></span> <br /></div>
      
    </div>
      
  </div>

  <?php endwhile; ?>
  <?php endif;  ?>
 </div>

  <!-- Get Sidebar -->
  <?php get_sidebar();?>


  <!-- Get Footer -->
  <?php get_footer(); ?>

  

  <?php wp_footer(); ?>
</div>
</body>
</html>
