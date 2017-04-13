<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>final</title>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
   <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">          
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="js/dropdown.js" type="text/javascript">
 </script>   
 <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

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
  <!--	MOBILE JS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>
<!-- Modernizr -->
  <script src="js/modernizr.js"></script>
    

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
<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
    <body>
    <header>
	<div class="header-inner">
	<div id="logo">
		
				<a href="index.php"><img src="images/logo.png" alt="logo" /></a>
	</div><!--end logo-->
	 <h1>OM Spa</h1>
	 </div>  <!--close header-inner-->
    </header>
	
	