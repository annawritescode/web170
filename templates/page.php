<?php get_header(); ?>


    


    <div id="wrapper">
    
<div id="content">
<!--    start of  the wp loop-->
    <?php if ( have_posts()): while(have_posts()) : the_post(); //start first loop ?>
   
    <?php the_content(''); //get content ?>

<!--    end loop one-->
  <?php endwhile; endif; ?>
    
    <small>page.php</small>
    

    
    </div>
<!--  end content div-->
    </div>
 <!--  end wrapper div-->   
    <?php get_footer(); ?>
            
      <small>page.php</small>      
           