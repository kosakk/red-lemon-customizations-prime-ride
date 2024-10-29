<?php

// Hide the subtotal from the order-received page.
add_filter('woocommerce_get_order_item_totals', 'hide_subtotal_on_order_received_page', 10, 3);
function hide_subtotal_on_order_received_page($total_rows, $order, $tax_display) {
    if (is_order_received_page()) {
        // Remove the subtotal row from the order totals array
        unset($total_rows['cart_subtotal']);
    }
    return $total_rows;
}



// Hide subtotal from the emails
// add_filter( 'woocommerce_get_order_item_totals', 'reordering_order_item_totals', 10, 3 );
function reordering_order_item_totals( $total_rows, $order, $tax_display ){
    $shipping = $total_rows['cart_subtotal'];
	
    unset($total_rows['cart_subtotal']);

    return $total_rows;
}