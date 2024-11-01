<?php

/**
 * @link              https://www.linkedin.com/company/plainsurf
 * @since             1.0
 * @package           Custom Buttons for WooCommerce
 *
 * Plugin Name:       Custom Buttons for WooCommerce
 * Description:       Custom Buttons for WooCommerce is a simple plugin to customize your store’s add to cart, place order, sale buttons. It makes it easy to change the ‘Add to cart’, ‘Place Order’, ‘Sale’ button text.
 * Version:           1.6
 * Author:            PlainSurf Solutions
 * Author URI:        https://plainsurf.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Main Setting Page
include('includes/render_setting_page.php');

// Register Settings
include('includes/register_settings.php');

// Validate Plugin Settings
include('includes/validate_plugin_settings.php');

// Change Add to Cart Button Text
include('includes/change_cart_button.php');

// Change Sale Button Text
include('includes/change_sale_button.php');

// Change Proceed to Checkout Button Text

// Change Place Order Button Text
include('includes/change_place_order_button.php');

// Pro version will include customization of cart messages.

?>
