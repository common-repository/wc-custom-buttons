<?php

function wcb_plainsurf_render_cart_button_text_field() {
  $options = get_option( 'wcb_plainsurf_plugin_settings' );
  printf(
    '<input type="text" name="%s" value="%s" />',
    esc_attr( 'wcb_plainsurf_plugin_settings[cart_button_text_field]' ),
    esc_attr( $options['cart_button_text_field'] )
  );
}

function wcb_plainsurf_change_cart_button_text() {
  $options = get_option( 'wcb_plainsurf_plugin_settings' );
  $cart_button_text = $options['cart_button_text_field'];
  if(!(empty($cart_button_text))){
  return __( $cart_button_text, 'woocommerce' ); 
  }
  else {
    return __( 'Add to Cart', 'woocommerce' );
  }
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'wcb_plainsurf_change_cart_button_text' ); 
add_filter( 'woocommerce_product_add_to_cart_text', 'wcb_plainsurf_change_cart_button_text' );

?>
