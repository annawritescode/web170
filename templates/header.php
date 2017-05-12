<!--header.php-->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
<!--    flexslider-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" media="screen" />

 <!--font awesome css-->
<link href="<?php bloginfo('template_directory');?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<!--stylesheet    -->
<link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- jQuery -->   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    
    
    <!--    Dropdown menu-->
<script src="<?php bloginfo('template_directory'); ?>/js/dropdown.js" type="text/javascript">
 </script>   
 
   <!-- FlexSlider -->
  <script  src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>

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
  <!--	MOBILE JS-->
  
		<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>
<!-- Modernizr -->
  <script src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script>

  <style type="text/css">
    .flex-caption {
      width: 96%;
      padding: 2%;
      left: 0;
      bottom: 0;
      background: rgba(0,0,0,.5);
      color: #fff;
      text-shadow: 0 -1px 0 rgba(0,0,0,.3);
      font-size: 14px;
      line-height: 18px;
    }
    li.css a {
      border-radius: 0;
    }
  </style>