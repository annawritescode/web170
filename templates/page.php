//Page.php
<php get_header(); ?>
    
<div id="content">
<!--    start of  the wp loop-->
    <?php if ( have_posts()): while(have_posts()); ?>
<!--    getting page or posting title-->
    <h2><?php the_title(); ?></h2>
<!--    getting written content-->
    <?php the_content(''); ?>
<!--    end loop-->
  <?php endwhile; endif; ?>
    
    <small>page.php</small>
    
    
    
    
    </div>
<!--  end content div-->
    <?php get_footer(); ?>