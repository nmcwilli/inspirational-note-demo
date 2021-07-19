<?php 
function my_enqueued_assets() {
    wp_enqueue_style('my-css-file', plugin_dir_url( __DIR__ ) . '/css/style.css', '', time());
}