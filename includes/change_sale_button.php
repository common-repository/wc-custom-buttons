<?php

function wcb_plainsurf_render_sale_button_text_field() {
  $options = get_option( 'wcb_plainsurf_plugin_settings' );
  printf(
    '<input type="text" name="%s" value="%s" />',
    esc_attr( 'wcb_plainsurf_plugin_settings[sale_button_text_field]' ),
    esc_attr( $options['sale_button_text_field'] )
  );
}

function wcb_plainsurf_change_sale_button_text($text, $post, $_product) {
	$options = get_option( 'wcb_plainsurf_plugin_settings' );
  	$sale_button_text = $options['sale_button_text_field'];
  	if(!(empty($sale_button_text))) {
    return '<span class="onsale">' . $sale_button_text . '</span>';
	}
	else {
		return '<span class="onsale">Sale</span>';
	}
}
add_filter( 'woocommerce_sale_flash', 'wcb_plainsurf_change_sale_button_text', 10, 3);

?>
