EHBO CLEANUP BATCH 10

Replace these files:
- assets/css/home.css
- assets/css/responsive.css
- assets/css/publicaties.css

What changed:
- Removed the duplicate global section-eyebrow styles from home.css; page-base.css is already the active shared implementation.
- Removed unused event-support placeholder styles left over from before the real image was added.
- Removed the obsolete first-generation Publicatiearchief CSS from home.css.
- Removed the matching obsolete Publicatiearchief rules from responsive.css.
- Moved the few archive spacing rules that are still part of the current Publicaties design into publicaties.css, where they belong.

Verification:
- Homepage representative computed styles compared at desktop/tablet/mobile: 0 differences.
- Current Publicaties archive computed styles compared at 1400, 1100, 1000, 821, 820, 761, 760, 641, 640, 520 and 400px: 0 differences.

Quick test after replacing:
1. Homepage: Over ons + Hulpverlening sections.
2. Publicaties page: archive spacing, especially between years.
3. Publicaties page on phone width.
