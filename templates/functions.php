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
elseif (is_page()|| is_single()){
    the_title(); //retrieve page or posting title
}
else{
    bloginfo('description'); //retrieve site name for everything else
}
?>