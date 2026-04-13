# ClickTrack Marketing Snippets (WordPress Plugin)

This repository now contains a valid **installable WordPress plugin structure**.

## Plugin entry file
- `clicktrack-marketing-snippets.php` (root)
  - Includes WordPress plugin headers required for installation.
  - Loads the plugin class and boots it.

## Current branding assets
- `assets/css/branding.css`
  - Poppins font import.
  - Blue/black dark theme variables.
  - Full-width background styles.
  - Improved typography hierarchy for `h1` and `h2`.
- `assets/images/logo-clicktrack-marketing.svg`
  - ClickTrack Marketing themed logo.

## Runtime behavior
- Frontend + WP Admin enqueue of the branding stylesheet.
- Shortcode available:
  - `[clicktrack_brand_logo]` → renders the ClickTrack logo SVG.

## Installation
1. Zip this plugin folder.
2. In WordPress Admin, go to **Plugins → Add New → Upload Plugin**.
3. Upload zip and activate **ClickTrack Marketing Snippets**.

If you want, I can next wire this branding into your existing plugin templates/pages directly (once those files are present in this repo).
