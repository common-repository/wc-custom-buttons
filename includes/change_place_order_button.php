<?php

function wcb_plainsurf_render_place_order_button_text_field() {
  $options = get_option( 'wcb_plainsurf_plugin_settings' );
  printf(
    '<input type="text" name="%s" value="%s" />',
    esc_attr( 'wcb_plainsurf_plugin_settings[place_order_button_text_field]' ),
    esc_attr( $options['place_order_button_text_field'] )
  );
}

function wcb_plainsurf_change_place_order_button_text($order_button_text) {

	$options = get_option( 'wcb_plainsurf_plugin_settings' );
  $order_button_text = $options['place_order_button_text_field'];
  if(!(empty($order_button_text))){
	return $order_button_text;
  }
  else {
    $order_button_text = "Place Order";
    return $order_button_text;
  }
}
add_filter('woocommerce_order_button_text','wcb_plainsurf_change_place_order_button_text',1);

?>
