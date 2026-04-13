# Code-snippets-plugin

## ClickTrack Marketing branding update

This repository now includes a reusable branding stylesheet and logo asset for a blue/black ClickTrack Marketing look and feel.

### Added files
- `src/branding.css`
  - Imports **Poppins** font.
  - Applies dark blue/black full-width background treatment.
  - Defines typography hierarchy with proper heading weights (`h1`/`h2`).
  - Includes accent, card, and button styles aligned to the provided branding.
- `src/logo-clicktrack-marketing.svg`
  - Dark-themed ClickTrack Marketing logo placeholder for plugin header/footer usage.

### Quick usage
1. Load the stylesheet in your plugin frontend:
   ```html
   <link rel="stylesheet" href="src/branding.css" />
   ```
2. Ensure your main wrapper uses one of these classes for full-width background:
   - `plugin-root`
   - `site-wrapper`
   - `main`
3. Replace existing logo references with:
   - `src/logo-clicktrack-marketing.svg`

If you share the actual plugin source files in this repo, the styles can be wired directly into each component/page.
