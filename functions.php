<?php
function getStyles(){
    wp_enqueue_style("global_style",get_stylesheet_uri());
}
add_action('wp_enqueue_scripts',"getStyles")
?>