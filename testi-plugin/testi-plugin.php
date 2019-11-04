<?php

/**
 * Plugin Name: Testi Plugin
 * *Description: Tämä on pelkkä testi plugin
 **/

function testi_plugin ()
{
    $content = "Tää on ihan yli simppeli plugin";
    
    $content .= "<div>Tämä on DIV</div>";

    $content .= "<p>Tämä on paragraph</p>";
    
    return $content;


}
add_shortcode('example', 'testi_plugin');

?>