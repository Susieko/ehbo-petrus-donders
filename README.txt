EHBO cleanup batch 12

Replace these files in the theme:
- assets/css/home.css
- assets/css/responsive.css

What changed:
- Removed the obsolete Publicatiearchief stylesheet that was still living in home.css.
- Removed the matching obsolete Publicatiearchief responsive rules from responsive.css.
- The current Publicaties page already has its own page-specific implementation in publicaties.css.
- No current homepage markup uses the removed archive selectors.

Verification:
- Compared the current Publicaties archive before/after at 15 viewport widths (1400px down to 400px).
- Computed-style differences: 0.

Approximate cleanup:
- home.css: 5330 -> 5051 lines
- responsive.css: 1189 -> 1132 lines
- ~336 legacy lines removed total.
