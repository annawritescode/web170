<?php include'includes/header.php'; ?>
<?php include'includes/nav.php'; ?>  
 




    <div id="wrapper"> 
	<div class="flexslider">
          <ul class="slides">
            <li><img src="images/pedi2.jpg" alt="Pedicure"/> <p class="flex-caption">Pedicure</p></li>
            
            <li><img src="images/pink2.jpg" alt="Girl with pink flowers" /> <p class="flex-caption">Facial Services</p></li>
  	    	<li><img src="images/tub2.jpg" alt="Spa tub" /><p class="flex-caption">Spa Tub</p></li>
  	    	<li><img src="images/hot-stone-massage2.jpg" alt="hot stone massage"/><p class="flex-caption">Hot Stone Massage</p></li>
          </ul>
        </div> <!--end flex slider-->
	

  <!-- FlexSlider -->

  
  <script  src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script> 
	
    
  


</div><!--end wrapper-->
    
<footer>
   
     <div id="footer-inner">
    
    
   
    
      <div id="left">
        <div class="left">
       
       <h4>Our Hours</h4><br>
	   <p>Sunday  11am-6pm</p>
	   <p>Mon-Fri  9am-pm</p>
	   <p>Saturday 9am-6pm</p>

          </div><!--end class left #666-->
		  <div class="right">
			 <h4>Follow Us </h4><br>
              <ul>
          <li><a href="#"><i class="fa  fa-instagram fa-fw" aria-hidden="true"></i>instagram </a></li>
              
          <li><a href="#"><i class="fa  fa-pinterest fa-fw" aria-hidden="true"></i>Pinterest</a></li> 
              
         <li><a href="#"><i class="fa fa-twitter-square fa-fw" aria-hidden="true"></i>Twitter</a> </li> 
        
        <li><a href="#"><i class="fa fa-facebook-square fa-fw" aria-hidden="true"></i>Facebook</a></li>
            </ul>  
          </div><!--end class right #666-->
        </div><!--end pink left-->
    
    
    
    
    
    
     <div id="right">
         <div class="right">
          <div class="form">
		
<fieldset>
	<h4>Contact Us</h4>

			<label>Name</label>
				<input type="text" name="name" id="name">						
			<label>Email</label>
				<input type="text" name="email" id="email">
            <input type="submit" value="submit">
			
	</fieldset>

		</div>
          </div><!--end class right #666-->
		   <div class="left">
          <div id="map">
	<img src="images/map.png" alt="map" /> 

          </div><!--end class left #666-->
         
         
        </div><!--end pink left-->
    
    
     </div><!--end pink right-->
    
    </div><!--end footer inner-->
   
    </footer>
    
<?php include'includes/container.php'; ?>
