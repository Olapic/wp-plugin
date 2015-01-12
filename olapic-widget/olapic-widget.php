<?php
/*
Plugin Name: Olapic Widget
Plugin URI: http://www.olapic.com/
Description: Simple plugin to render Olapic widgets
Version: 1.0
Author: Jae Han Kim (Olapic)
Author URI: http://www.olapic.com/
*/

/*
Simple Olapic widget for #brooksrunning (Wordpress Plugin)

USAGE: [olapic data_tags ='' data_instance ='' data_apikey='' data_mode'']
*/

//tell wordpress to register the demolistposts shortcode
add_shortcode("olapic", "olapic_handler");

function olapic_handler($atts) {
  $olapic_output = olapic_brooksrunning_function($atts); 
  return $olapic_output;
}

function olapic_function($atts) {
  //process plugin
  $arguments = shortcode_atts(
  				array(
  					'data_instance' => '',
            'data_apikey' => '',
            'data_tags' => '',
            'data_mode' => ''
  				),
  				$atts
  			);

  $data_instance= 'data-instance="'.$arguments['data_instance'].'" ';
  $data_apikey= 'data-apikey="'.$arguments['data_apikey'].'" ';
  $data_tags = '';
  $data_mode = '';
  if($arguments['data_tags'] != '')
 		$data_tags= 'data-tags="'.$arguments['data_tags'].'" ';
  if($arguments['data_mode'] != '')
    $data_mode='data-mode="'.$arguments['data_mode'].'" ';




  $olapic_output = '<div id="olapic_specific_widget"></div><script type="text/javascript" src="//photorankstatics-a.akamaihd.net/81b03e40475846d5883661ff57b34ece/static/frontend/latest/build.min.js"  data-olapic="olapic_specific_widget" '.$data_instance.$data_apikey.$data_tags.$data_mode.'async="async"></script>';
  //send back text to calling function
  return $olapic_output;
}
?>
