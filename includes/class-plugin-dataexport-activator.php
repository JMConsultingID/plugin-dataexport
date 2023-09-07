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

    public static function activate() {
        if ( ! is_plugin_active( 'git-updater/git-updater.php' ) ) {
            // Set transien untuk pemberitahuan
            set_transient( 'plugin_dataexport_github_updater_notice', true, 5 );
            // Nonaktifkan plugin Anda
            deactivate_plugins( plugin_basename( dirname( __DIR__ ) . '/plugin-dataexport.php' ) );
        }
    }
}

// Tambahkan pemberitahuan jika transien diatur
add_action( 'admin_notices', 'plugin_dataexport_admin_notices' );

function plugin_dataexport_admin_notices() {
    // Cek transien
    if ( get_transient( 'plugin_dataexport_github_updater_notice' ) ) {
        ?>
        <div class="notice notice-error">
            <p><?php _e( 'The Dataexport plugin requires GitHub Updater to be enabled. Please install and enable GitHub Up', 'plugin-dataexport.', 'plugin-dataexport' ); ?></p>
        </div>
        <?php
        // Hapus transien setelah pemberitahuan ditampilkan
        delete_transient( 'plugin_dataexport_github_updater_notice' );
    }
}
