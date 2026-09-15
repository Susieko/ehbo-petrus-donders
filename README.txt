EHBO cleanup batch 13
=====================

Replace these files in the theme:
- assets/css/home.css
- assets/css/page-base.css
- inc/assets.php

What changed
------------
- hero.css and home.css now load only on the front page instead of every page.
- responsive.css no longer requires the homepage styles on inner pages.
- shared .section-button styling was moved from home.css to page-base.css because the Stempelkaart page also uses it.
- removed the duplicated/dead homepage .section-eyebrow base rule and a dead mobile override; page-base.css already supplies the effective shared styling.

Why
---
Inner pages were downloading roughly 100 KB of unminified homepage/hero CSS they did not use. This keeps page-specific assets page-specific without changing the current appearance.

Checks performed
----------------
- PHP syntax check passed for inc/assets.php.
- Static class audit found no remaining required inner-page dependency on hero.css/home.css beyond shared components handled by page-base or the Stempelkaart's own responsive rule.
- Computed-style comparison across homepage + Stempelkaart at 1400, 1100, 901, 900, 761, 760, 641, 640, 520 and 400 px: 0 differences.
- Hover and keyboard-focus button states were also compared: 0 differences.

Quick manual test
-----------------
1. Homepage: hero, section eyebrows, blue/yellow buttons, desktop and mobile.
2. Stempelkaart: bottom PDF button, including mobile width and keyboard focus.
3. Open one other inner page to confirm normal styling loads.
