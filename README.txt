EHBO Cleanup Batch 15

Replace these files in the theme:
- assets/css/global.css
- assets/css/home.css
- assets/css/responsive.css
- assets/css/page-base.css
- inc/assets.php

What changed:
- Moved homepage-only responsive rules out of the global responsive stylesheet and into home.css.
- responsive.css now contains only shared header/footer responsive rules.
- Moved shared section eyebrow and section-button components from page-base.css to global.css.
- page-base.css is no longer loaded on the homepage; it remains loaded on inner pages and the 404 template.
- Made home.css depend explicitly on hero.css.

Verification:
- Compared computed styles before/after across 17 viewport widths from 1600px to 400px.
- Homepage: 0 computed-style differences.
- Stempelkaart inner-page sample: 0 computed-style differences.

Quick manual checks:
1. Homepage desktop + mobile.
2. Header/mobile menu.
3. Footer.
4. Any inner page.
5. Stempelkaart PDF button.
