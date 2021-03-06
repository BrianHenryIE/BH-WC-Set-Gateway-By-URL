<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://github.com/BrianHenryIE/bh-wc-set-gateway-by-url/
 * @since      1.0.0
 *
 * @package    BH_WC_Set_Gateway_By_URL
 * @subpackage BH_WC_Set_Gateway_By_URL/admin
 */

namespace BH_WC_Set_Gateway_By_URL\admin;

use BH_WC_Set_Gateway_By_URL\WPPB\WPPB_Object;

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    BH_WC_Set_Gateway_By_URL
 * @subpackage BH_WC_Set_Gateway_By_URL/admin
 * @author     Brian Henry <BrianHenryIE@gmail.com>
 */
class Admin extends WPPB_Object {

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/bh-wc-set-gateway-by-url-admin.css', array(), $this->version, 'all' );
	}

}
