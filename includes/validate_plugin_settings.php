<?php

function wcb_plainsurf_validate_plugin_settings( $input ) {
    $output['cart_button_text_field'] = sanitize_text_field( $input['cart_button_text_field'] );
    $output['place_order_button_text_field'] = sanitize_text_field( $input['place_order_button_text_field'] );
    $output['sale_button_text_field'] = sanitize_text_field( $input['sale_button_text_field'] );
    return $output;
}

?>