<?php
/*
Plugin Name: Avoid Google's Cache
Plugin URI: http://wordpress.org/extend/plugins/avoid-googles-cache/
Description: Avoid getting your blog cached by e.g. Google.
Author: Kristian Risager Larsen
Version: 1.1
Author URI: http://kezze.dk
*/

add_action('wp_head', 'avoid_googles_cache');

function avoid_googles_cache()
{
	
	echo "\n\n<!-- Google and other search engines should not cache this page. Plugin by Kristian Risager Larsen, http://kezze.dk -->\n";
    echo "<meta name=\"robots\" content=\"noarchive\" />\n\n";

}
?>