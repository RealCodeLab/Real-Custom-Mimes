<?php
/*
Plugin Name: Real Custom Mimes
Plugin URI: https://realcodelab.com
Description: Custom mimes
Author: RealCodeLab
Version: 0.1
Author URI: https://realcodelab.com/
Text Domain: real-custom-mimes
Domain Path: /languages/
*/

add_filter('upload_mimes', 'add_custom_upload_mimes');

function add_custom_upload_mimes($existing_mimes)
{
    $existing_mimes['zip'] = 'application/zip';

    return $existing_mimes;
}
