<?
    add_filter( 'woocommerce_checkout_fields', 'custom_remove_fields', 9999 );
    
    function custom_remove_fields( $woo_checkout_fields_array ) {
    
        // Leave these fields in checkout or remove if you wanna 

        // unset( $woo_checkout_fields_array['billing']['billing_first_name'] );
        // unset( $woo_checkout_fields_array['billing']['billing_last_name'] );
        // unset( $woo_checkout_fields_array['billing']['billing_phone'] );
        // unset( $woo_checkout_fields_array['billing']['billing_email'] );
        // unset( $woo_checkout_fields_array['order']['order_comments'] ); 
    
        // and to remove the billing fields below
        unset( $woo_checkout_fields_array['billing']['billing_company'] ); // remove company field
        unset( $woo_checkout_fields_array['billing']['billing_country'] );
        unset( $woo_checkout_fields_array['billing']['billing_address_1'] );
        unset( $woo_checkout_fields_array['billing']['billing_address_2'] );
        unset( $woo_checkout_fields_array['billing']['billing_city'] );
        unset( $woo_checkout_fields_array['billing']['billing_state'] ); // remove state field
        unset( $woo_checkout_fields_array['billing']['billing_postcode'] ); // remove zip code field
    
        return $woo_checkout_fields_array;
    }

?>