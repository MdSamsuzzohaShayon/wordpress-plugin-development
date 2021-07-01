<?php


/**
 * Plugin Name: First Unique Plugin
 * Description: A truly amazing plugin desc
 * Version: 1.0
 * Author: Shayon
 * Author URI: http://twitter.com/shayon_md
 */
 // https://developer.wordpress.org/plugins/plugin-basics/header-requirements/

 // # WE CAN NAME ANYTHING OF THIS FILE BUT FOR BEST PRACTICE MAKE THE NAME SAME AS FOLDER NAME


// WordPress offers filter hooks to allow plugins to modify various types of internal data at runtime.
// applied to the post content retrieved from the database, prior to printing on the screen (also used in some other operations, such as trackbacks).
add_filter("the_content", 'addToEndOfPost');
 // THIS FUNCTION NAME SHOULD BE UNIQUE
function addToEndOfPost($content){
  // HERE THIS CONTENT IS POST TEXT
  // Determines whether the query is for an existing single post. // The is_main_query() function is a conditional function that can be used to evaluate whether the current query (such as within the loop) is the “main” query (as opposed to a secondary query).
  if (is_single() && is_main_query()) {
      return $content . '<h1 style="color: blue;">My Name is Shayon</h1>';
  }else if (is_page()){
    return '<h1 style="color: blue;">This is a page</h1>' . $content ;
  }
    return $content;
}


 ?>
