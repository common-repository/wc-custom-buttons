<?php

function wcb_plainsurf_register_settings() {
  register_setting(
    'wcb_plainsurf_plugin_settings',
    'wcb_plainsurf_plugin_settings',
    'wcb_plainsurf_validate_plugin_settings'
  );

  // register add to cart field + section 

  add_settings_section(
    'cart_button_section',
    'Change Add to Cart Button Text :-',
    'wcb_plainsurf_section_cart_button_text',
    'wcb_plainsurf_plugin'
  );

  add_settings_field(
    'cart_button_text_field',
    'Add to Cart Button Text',
    'wcb_plainsurf_render_cart_button_text_field',
    'wcb_plainsurf_plugin',
    'cart_button_section'
  );

  // register sale field + section 

  add_settings_section(
    'sale_button_section',
    'Change Sale Button Text :-',
    'wcb_plainsurf_section_sale_button_text',
    'wcb_plainsurf_plugin'
  );

  add_settings_field(
    'sale_button_text_field',
    'Sale Button Text',
    'wcb_plainsurf_render_sale_button_text_field',
    'wcb_plainsurf_plugin',
    'sale_button_section'
  );

  	// register place order field + section 

  add_settings_section(
    'place_order_button_section',
    'Change Place Order Button Text :-',
    'wcb_plainsurf_section_place_order_button_text',
    'wcb_plainsurf_plugin'
  );

  add_settings_field(
    'place_order_button_text_field',
    'Place Order Button Text',
    'wcb_plainsurf_render_place_order_button_text_field',
    'wcb_plainsurf_plugin',
    'place_order_button_section'
  );

}
add_action( 'admin_init', 'wcb_plainsurf_register_settings' );

?>