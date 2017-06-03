<?php
/*
Theme Name: Web170
Theme URI:https://github.com/annawritescode
Author: Anna Wong
Author URI:
Description: Theme for my web 170 project
Version: 1.0


*/

function get_my_title_tag(){
    global $post;
    
    if(is_front_page()) //for sites front page
    bloginfo('description');//retrieve site name
    
}
/*elseif (is_page()|| is_single()){
    the_title(); //retrieve page or posting title
}
else{
    bloginfo('description'); //retrieve site name for everything else
}*/

//rigister sidebar
register_sidebar(array(
    'before_widget'=> 'div id="%1$s" class="widget %2$s">',
    'after_widget'=>'</div>',
    'before_title'=>'<h2>',
    'after_title'=>'</h2>',
));

//register menus
register_nav_menus(array('main-menu' => __('Main Menu'),));

//add theme support for post thumbnails and featured images
add_theme_support('post-thumbnails');

//create page excerpts
add_post_type_support('page', 'excerpt');

?>