<?php
function getPost($post = NULL) {
	include('post.php');
}
if ( function_exists('register_sidebar') )
{
    register_sidebar
    (   array
        (
          'name' => 'Sidebar-Single',
          'before_widget' => '<div class="bottombar">',
          'after_widget' => '</div>',
          'before_title' => '<h2 class="widgettitle">',
          'after_title' => '</h2>',
        )
    );
    register_sidebar
    (   array
        (
          'name' => 'Bottom-Left',
          'before_widget' => '<div class="bottombar">',
          'after_widget' => '</div>',
          'before_title' => '<h2 class="widgettitle">',
          'after_title' => '</h2>',
        )
    );  
    register_sidebar
    (   array
        (
          'name' => 'Bottom-Middle',
          'before_widget' => '<div class="bottombar">',
          'after_widget' => '</div>',
          'before_title' => '<h2 class="widgettitle">',
          'after_title' => '</h2>',
        )
    );   
 register_sidebar
    (   array
        (
          'name' => 'Bottom-Right',
          'before_widget' => '<div class="bottombar">',
          'after_widget' => '</div>',
          'before_title' => '<h2 class="widgettitle">',
          'after_title' => '</h2>',
        )
    );   
}
?>