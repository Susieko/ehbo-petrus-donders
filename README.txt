EHBO cleanup batch 4

Replace:
assets/css/word-lid.css

What changed:
- Removed the obsolete first generation of the vacancy-card grid and card styles.
- Kept the newer "VACANCIES — CLEANER CARDS" implementation as the single source of truth.
- Removed duplicated responsive vacancy rules.
- Moved the still-active mobile meta-pill stacking rule into the final vacancy responsive block.
- Kept vacancy header and external-vacancy styles that are still in use.

Visual verification:
- Compared before/after rendering at desktop, tablet, and mobile widths.
- Pixel comparison showed no visual changes at 1400, 950, 760, 560, and 400 px widths.

No PHP, JavaScript, images, or other pages are changed in this batch.
