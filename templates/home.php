<?php get_header(); ?>
<!--Begin WP head function-->
    <?php wp_head(); ?>
<!--End WP head function-->

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
        
        <?php if(is_404()) ?>        
        
        
        
        
        </div><!--     end text-->
        

    
  


</div><!--end wrapper-->
    <small>index.php</small>
        
        
<?php get_footer(); ?>
