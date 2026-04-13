<?php

if (! defined('ABSPATH')) {
    exit;
}

class ClickTrack_Marketing_Snippets {
    public function run() {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_branding_assets'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_branding_assets'));
        add_shortcode('clicktrack_brand_logo', array($this, 'render_logo_shortcode'));
    }

    public function enqueue_branding_assets() {
        wp_enqueue_style(
            'ctm-branding',
            CTM_SNIPPETS_PLUGIN_URL . 'assets/css/branding.css',
            array(),
            CTM_SNIPPETS_VERSION
        );
    }

    public function render_logo_shortcode() {
        $logo_url = esc_url(CTM_SNIPPETS_PLUGIN_URL . 'assets/images/logo-clicktrack-marketing.svg');

        return '<img class="brand-logo" src="' . $logo_url . '" alt="ClickTrack Marketing logo" />';
    }
}
