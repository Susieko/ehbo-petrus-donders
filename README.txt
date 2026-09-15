EHBO cleanup — Batch 14

Replace these files:
- assets/css/home.css
- assets/css/responsive.css
- assets/css/footer.css
- assets/css/header.css

Changes:
- removed obsolete homepage event image-placeholder CSS (the template now uses a real image);
- removed obsolete responsive rules for that placeholder;
- removed old footer heartbeat selectors and their unused keyframe animations;
- removed old footer ANBI child selectors for markup that no longer exists;
- renamed a historical "FINAL FIX" comment in header.css.

These selectors are not referenced by the current PHP or JavaScript, so this is dead-code cleanup only.

Suggested commit:
git add .
git commit -m "Remove obsolete global CSS"
