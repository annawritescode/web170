<?php get_header(); ?>
<!--start front page-->
    <div id="wrapper"> 
	<div class="flexslider">
          <ul class="slides">
            <li><img src="<?php bloginfo('template_directory');?>/images/pedi2.jpg" alt="Pedicure"/> <p class="flex-caption">Pedicure</p></li>
            <li><img src="<?php bloginfo('template_directory');?>/images/pink2.jpg" alt="Girl with pink flowers" /> <p class="flex-caption">Facial Services</p></li>
  	    	<li><img src="<?php bloginfo('template_directory');?>/images/tub2.jpg" alt="Spa tub" /><p class="flex-caption">Spa Tub</p></li>
            <li><img src="<?php bloginfo('template_directory');?>/images/hot-stone-massage2.jpg" alt="Hot stone massage"/> <p class="flex-caption">Hot stone massage</p></li>
  	    	
          </ul>
        </div> <!--end flex slider-->
	

 
<!--	Begin text-->
        <div id="content">
        <!--    start of  the wp loop-->
    <?php if ( have_posts()): while(have_posts()) : the_post(); //start first loop ?>
   
     <?php the_content(''); //get content ?>

<!--    end loop one-->
  <?php endwhile; endif; ?>
    
    
    
    
    <?php rewind_posts(); //stop first loop ?>
    <?php query_posts(array('post_type'=> 'page', 'posts_per_page' => -1,'post_status' => 'publish','post_parent'=>185,'order' => 'ASC')); // tell loop 2 to show posts ?>
    <?php if(have_posts()): while (have-posts()) : the_post(); //start loop 2 ?>
    <?php the_title(); ?>
    <?php endwhile; endif;  //end loop2 ?>
        <?php if(is_404()) ?>        
        
        
        
        
        </div><!-- end content    end text-->
        
 <!-- Begin Widgets -->
    <div id="widgets">
    
        <section class="widget-item">
        <h2>Blog Items:</h2>
        <ul>
		<?php rewind_posts(); // stop loop one ?>
        <?php query_posts('showposts=4'); // give directions to loop two ?>
        <?php while (have_posts()) : the_post(); // start loop two ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; // end loop two ?>
        </ul>
        </section>
       
    </div>
    <!-- End Widgets -->
    

</div><!--end wrapper-->
<small>front-page.php</small>
        
<!--        end front-->
<?php get_footer(); ?>