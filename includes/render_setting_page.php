<?php

function wcb_plainsurf_add_settings_page() {
  add_options_page(
    'WooCommerce Custom Buttons Settings',
    'WooCommerce Custom Buttons',
    'manage_options',
    'wcb-plainsurf-plugin',
    'wcb_plainsurf_render_settings_page'
  );
}
add_action( 'admin_menu', 'wcb_plainsurf_add_settings_page' );

function wcb_plainsurf_render_settings_page() {
?>
  <h2>WooCommerce Custom Buttons Settings</h2>
  <form action="options.php" method="post">
    <?php 
    settings_fields( 'wcb_plainsurf_plugin_settings' );
    do_settings_sections( 'wcb_plainsurf_plugin' );
    ?>
    <input
      type="submit"
      name="submit"
      class="button button-primary"
      value="<?php esc_attr_e( 'Save Settings' ); ?>"
    />
  </form>
<?php
}

?>