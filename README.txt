EHBO cleanup batch 11

Replace these files/folders in the theme while preserving their paths:
- assets/css/home.css
- assets/css/responsive.css
- inc/assets.php

Add this new stylesheet:
- assets/css/stempelkaart-lesavonden.css

What changed:
- Moved all Stempelkaart lesavonden page styles out of global home.css.
- Moved its responsive rules out of global responsive.css.
- Registered the new stylesheet as a page-specific WordPress asset.
- No intended visual changes.

Quick test:
- Open /stempelkaart-lesavonden/ on desktop, tablet and phone widths.
- Check hero/card, three steps, requirements block and PDF CTA.
