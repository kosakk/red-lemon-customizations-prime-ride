<?php

// Hook into WooCommerce email order meta 
// add_filter('woocommerce_email_order_meta', 'remove_all_order_meta_from_emails', 10, 3); 
function remove_all_order_meta_from_emails($order_meta, $order, $sent_to_admin) {     
	// Return an empty array to remove all order meta     
	return array(); 
}

add_filter( 'woocommerce_order_item_get_formatted_meta_data', 'unset_order_meta_data', 10, 2); 
function unset_order_meta_data($order_meta, $item) {     
	
	// Only on emails notifications     
	if( is_admin() || is_wc_endpoint_url() )         
		return $order_meta;     
	
	foreach( $order_meta as $key => $meta ){         
		unset($order_meta[$key]);          
	}
	
	return $order_meta; 
}
