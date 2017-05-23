<?php get_header(); ?>
<!--Begin WP head function-->
    <?php wp_head(); ?>
<!--End WP head function-->
</head>
    <body <?php body_class(); ?>>
    <header>
	<div class="header-inner">
        
	   <div id="logo"><img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="logo" />
        </div><!--end logo-->
        
	 <h1>OM Spa</h1>
	 </div>  <!--close header-inner-->
    </header>
   
<!--++++++++Beggining nav++++++++-->

        
        
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' =>  'nav','container_id' => 'nav', ) ); ?>
        
        
      /*  <!--<nav id="nav">
 <ul class="nav">
        <li><a href="index.php">HOME </a></li>
        <li><a href="about.php">ABOUT</a></li> 
        <li class="button-dropdown">
        <a href="javascript:void(0)" class="dropdown-toggle">
        SERVICES  <span>▼</span>
        </a>
      
      <ul class="dropdown-menu">
        <li><a href="#"> Facials </a></li>
      
        <li><a href="#">Massages</a></li>
      
        <li><a href="#"> Mani Pedis</a></li>
		<li><a href="#"> Hydrotherapy</a></li>
        
    </ul>
     </li>end of dropdown
        
         <li><a href="#">BLOG</a> </li> 
        <li><a href="#">MENU AND PRICING</a> </li>   
        
 </ul>  
 </nav>-->*/
<!--+++++++++++ end nav++++++++++-->
<!--+++++++START MOBILE NAVIGATION++++++-->	

<!--<button class="nav-button">Toggle Navigation</button>
<div class="mobile-logo"><img src="<?php bloginfo('template_directory');?>/images/mobile-logo.png" alt="mobile-logo">

</div>

		 <ul class="primary-nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li class="parent"><a href="services.html">Services</a>
				<ul>
					<li><a href="#">Facials</a></li>
					<li><a href="#">Massages</a></li>
					<li><a href="#">Mani Pedis</a></li>
					<li><a href="#">Hydrotherapy</a></li>
				</ul>
			</li>
			
			<li><a href="specials.html">Special Offers</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul> -->
		
	<!--+++++++END MOBILE NAVIGATION++++++-->	

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
