<?php

/**
 * Fired during plugin activation
 *
 * @link       https://amantrabali.com
 * @since      1.0.0
 *
 * @package    Plugin_Dataexport
 * @subpackage Plugin_Dataexport/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Plugin_Dataexport
 * @subpackage Plugin_Dataexport/includes
 * @author     Ardika <ardi@jm-consulting.id>
 */
class Plugin_Dataexport_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
        // Tambahkan hook ke 'admin_init' untuk memeriksa saat plugin Anda diaktifkan
        add_action( 'admin_init', array( 'Plugin_Dataexport_Activator', 'check_github_updater_active' ) );
    }

    // Fungsi untuk memeriksa apakah GitHub Updater diaktifkan
    public static function check_github_updater_active() {
        // Cek apakah GitHub Updater aktif
        if ( ! is_plugin_active( 'github-updater/github-updater.php' ) ) {
            // Tampilkan pemberitahuan di dasbor
            add_action( 'admin_notices', array( 'Plugin_Dataexport_Activator', 'show_github_updater_notice' ) );
            // Nonaktifkan plugin Anda
            deactivate_plugins( plugin_basename( dirname( __DIR__ ) . '../plugin-dataexport.php' ) );
        }
    }

    // Fungsi untuk menampilkan pemberitahuan
    public static function show_github_updater_notice() {
        ?>
        <div class="notice notice-error">
            <p><?php _e( 'Plugin Dataexport memerlukan GitHub Updater untuk diaktifkan. Silakan instal dan aktifkan GitHub Updater terlebih dahulu.', 'plugin-dataexport' ); ?></p>
        </div>
        <?php
    }
}
