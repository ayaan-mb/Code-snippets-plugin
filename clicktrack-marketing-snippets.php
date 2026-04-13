<?php
/**
 * Plugin Name: ClickTrack Marketing Snippets
 * Plugin URI:  https://clicktrackmarketing.com/
 * Description: WordPress plugin scaffold with ClickTrack Marketing branding assets (blue/black theme, Poppins typography, and logo).
 * Version:     1.0.0
 * Author:      ClickTrack Marketing
 * Author URI:  https://clicktrackmarketing.com/
 * License:     GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: clicktrack-marketing-snippets
 */

if (! defined('ABSPATH')) {
    exit;
}

define('CTM_SNIPPETS_VERSION', '1.0.0');
define('CTM_SNIPPETS_PLUGIN_FILE', __FILE__);
define('CTM_SNIPPETS_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('CTM_SNIPPETS_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once CTM_SNIPPETS_PLUGIN_DIR . 'includes/class-clicktrack-marketing-snippets.php';

function ctm_snippets_bootstrap() {
    $plugin = new ClickTrack_Marketing_Snippets();
    $plugin->run();
}
ctm_snippets_bootstrap();
