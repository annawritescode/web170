<!--Beginning of sidebar-->
<div id="sidebar">


<!--Beginning of sub nav-->

<div id="sub-navigation" class="widget">
    
    <h2>
        <?php
       
            if(is_page()) { // if we are on a page...
                echo get_the_title($post->post_parent);
            }else{
                echo'Blog';
            }
	   ?>
    </h2>
    
    <ul class="sub-navigation-items"><!--dropdown-->

      <?php
        if(is_page()){
        
		      if($post->post_parent) { // if the page has a parent...
		
			     wp_list_pages(array('child_of' => $post->post_parent,'title_li' =>_(''), )); // list the children of said parent
		
		      } else { // if on the parent page...
			
			     wp_list_pages(array('child_of' =>$post->ID,'title_li' =>_(''),));
			
		      }
	
	           } else { // if we are not on a page
	
	
		          wp_list_categories(array('title' => '', )); // list the blog categories with the tile of "Blog" 
		
	
	}
        
   ?>
    </ul>  
   <?php if(get_post_meta($post->ID, 'quote', true)) : // check to see if there is a quote ?>
    
        <!--Begin quote-->
        <div id="pull-quote">
        <blockquote><?php echo get_post_meta($post->ID, 'quote', true);  ?></blockquote>
        <?php endif; ?>
        </div><!--End quote-->
    
    </div><!-- end sub nav-->

</div><!-- end sidebar-->







