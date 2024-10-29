<?php
/*
Plugin Name: Red Lemon Customizations
Plugin URI: https://redlemon.gr/plugins/wp/primerides-gr
Description: A plugin to add custom functions and code to the Prime Rides site.
Version: 1.0.1
Requires at least: 7.4
Author: Red Lemon
Author URI: https://redlemon.gr/
Text Doamin: redlemon
*/



// Define a helper function to include files with error handling
function safe_include_once($filePath) {
    // Check if the file exists and is readable
    if (file_exists($filePath) && is_readable($filePath)) {
        try {
            include_once $filePath;
            return true; // Return true if successful
        } catch (Exception $e) {
            // Handle any unexpected exceptions (if error suppression fails)
            error_log("[Exception] Error including $filePath: " . $e->getMessage());
            return false;
        }
    } else {
        // Log specific errors depending on the issue
        if (!file_exists($filePath)) {
            error_log("[Error] File not found: $filePath");
        } elseif (!is_readable($filePath)) {
            error_log("[Error] File is not readable: $filePath");
        }
        return false; // Return false if inclusion fails
    }
}

// Attempt to include necessary customization files with error handling
$customFiles = [
    plugin_dir_path(__FILE__) . 'includes/custom-products-description.php',
    plugin_dir_path(__FILE__) . 'includes/redirect-to-checkout.php',
    plugin_dir_path(__FILE__) . 'includes/hide-subtotal.php'
];

// Loop through and include each file safely
foreach ($customFiles as $file) {
    if (!safe_include_once($file)) {
        // Optionally display a user-friendly error or handle the issue
        echo "There was an issue loading customization file: " . basename($file);
    }
}
