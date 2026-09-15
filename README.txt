EHBO cleanup batch 5

Replace:
assets/css/fotogalerij.css

What changed:
- Consolidated the featured gallery grid into one implementation instead of several later overrides.
- Consolidated the gallery story and final CTA styles.
- Removed the old "FINAL GALLERY SPACING FIX" patch block.
- Removed an unrelated Word lid selector that had accidentally ended up in fotogalerij.css.
- Removed unused empty-state <code> styling.
- Moved final spacing values into the selectors they actually belong to.
- Removed unnecessary !important usage from the story lead by using a clearer selector.
- Consolidated tablet/mobile grid placement rules.

Responsive fix:
The old late override blocks were loaded after the responsive media queries, so they were silently undoing parts of the tablet/mobile layout.
This cleanup restores the intended responsive behavior:
- tablet story section becomes one column;
- tablet CTA stacks vertically;
- featured gallery becomes one column at 760px and below;
- mobile CTA spacing rules apply correctly again.

Verification:
- Desktop computed styles are identical before/after at 1600, 1400, 1300, 1200 and 1101 px.
- Differences at 1100px and below are intentional responsive fixes caused by removing the old cascade overrides.

No PHP, JavaScript, images, or other pages are changed in this batch.
