<?php
/*
Plugin Name: Olapic Shortcode Widget
Plugin URI: http://www.olapic.com/
Description: Plugin to utilize shortcodes in order to surface olapic codes on wordpress
Version: 1.0
Author: Robert Pisano(Olapic)
Co-Author: Jae Han Kim (Olapic)
Author URI: http://www.olapic.com/
USAGE: in WP template - [olapic data_tags ='(if applicaple insert here)' data_instance ='abc123' data_apikey='123abc' data_mode'development']
*/

/*
Olapic Plugin to utilize shortcode. It's made general to be more robust.
*/

//tell wordpress to register the demolistposts shortcode
add_shortcode("olapic", "olapic_handler");

function olapic_handler($atts) {
  $olapic_output = olapic_brooksrunning_function($atts); 
  return $olapic_output;
}

function olapic_function($atts) {
  //process plugin
  $arguments = shortcode_atts(array('instance' => '', 'apikey' => '', 'tags' => '', 'mode' => ''), $atts);

  $data_instance= "data-instance=\"{$arguments['instance']}\" " ;
  $data_apikey= "data-apikey=\"{$arguments['apikey']}\" ";
 	$data_tags = 	!empty($arguments['tags']) ? "data-tags=\"{$arguments['tags']}\" " : '';  
  $data_mode = !empty($arguments['mode']) ? "data-mode=\"{$arguments['mode']}\" " : '';
   //since data_tags and data_mode aren't required, checks if its empty before giving it a value





  $olapic_output = "<div id=\"olapic_specific_widget\"></div><script type=\"text/javascript\" src=\"//photorankstatics-a.akamaihd.net/81b03e40475846d5883661ff57b34ece/static/frontend/latest/build.min.js\"  data-olapic=\"olapic_specific_widget\" {$data_instance}{$data_apikey}{$data_tags}{$data_mode}async=\"async\"></script>";
  //changed from using concatenation. Concatenation using the dot operator will concatenate each one individually. Using curly braces will place the variables in once - better practice when using multiple concatenations
  return $olapic_output;
}
?>