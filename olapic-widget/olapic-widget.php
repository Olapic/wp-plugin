<?php
/*
Plugin Name: Olapic Shortcode Widget
Plugin URI: http://www.olapic.com/
Description: Plugin to utilize shortcodes in order to surface Olapic Javascript codes on WordPress Posts
Version: 1.1
Author: Olapic
Co-Author: Robert Pisano (Olapic), Jae Han Kim (Olapic)
Author URI: http://www.olapic.com/
USAGE: In WP post, use the following shortcode: [olapic instance ='abc123' apikey='123abc' mode='development' tags ='(if applicaple insert here)']
*/

// Tell wordpress to register the "olapic" shortcode
add_shortcode('olapic', 'olapic_function');

function olapic_function($atts)
{
    $arguments = shortcode_atts(array(
        'instance-id' => '',
        'apikey' => '',
        'tags' => '',
        'mode' => '',
        'lang' => '',
    ), $atts);

    $data_instance = "data-instance=\"{$arguments['instance-id']}\"";
    $data_apikey = "data-apikey=\"{$arguments['apikey']}\"";
    $data_tags = !empty($arguments['tags']) ? "data-tags=\"{$arguments['tags']}\"" : '';
    $data_mode = !empty($arguments['mode']) ? "data-mode=\"{$arguments['mode']}\"" : '';
    $data_lang = !empty($arguments['lang']) ? "data-lang=\"{$arguments['lang']}\"" : '';
    //since data-tags, data-lang and data-mode aren't required, checks if its empty before giving it a value

    $olapic_output = "<div id=\"olapic_specific_widget\"></div><script type=\"text/javascript\" src=\"//photorankstatics-a.akamaihd.net/81b03e40475846d5883661ff57b34ece/static/frontend/latest/build.min.js\"  data-olapic=\"olapic_specific_widget\" {$data_instance} {$data_apikey} {$data_tags} {$data_mode} {$data_lang} async=\"async\"></script>" ;
    //changed from using concatenation. Concatenation using the dot operator will concatenate each one individually. Using curly braces will place the variables in once - better practice when using multiple concatenations

    return $olapic_output;
}
