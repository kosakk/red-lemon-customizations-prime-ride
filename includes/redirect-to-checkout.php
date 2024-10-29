<?php

// On add to cart, redirect directly to the checkout.
// Redirect to checkout page after adding a product to the cart
add_filter('add_to_cart_redirect', 'redirect_to_checkout_after_add_to_cart');

function redirect_to_checkout_after_add_to_cart($url) {
    $checkout_url = wc_get_checkout_url(); // Get the WooCommerce checkout page URL
    return $checkout_url;
}