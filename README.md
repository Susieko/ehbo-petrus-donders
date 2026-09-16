# EHBO Petrus Donders - Custom WordPress Theme

Custom WordPress website developed for EHBO-vereniging Petrus Donders in Tilburg.

The project started as a redesign of an existing website and developed into a custom WordPress theme with editable Gutenberg content, structured custom post types, server-side forms and reusable theme components.

## Project goals

The website was designed to make information about the association easier to find and manage.

Important goals were:

- clear navigation for a broad age range
- accessible and responsive layouts
- editable content for non-technical administrators
- structured management of publications and gallery images
- online registration and event-support request forms
- maintainable custom WordPress code
- consistent visual design across all pages

## Tech stack

- WordPress
- PHP
- HTML
- CSS
- JavaScript
- Gutenberg Block Editor
- WordPress REST / CMS APIs where appropriate
- Git and GitHub

No external page builder is used.

## WordPress architecture

The theme deliberately uses a hybrid approach.

Editorial content that should be manageable by administrators is stored in WordPress and edited through Gutenberg.

Application-specific functionality remains in custom PHP.

### Gutenberg content

Reusable block patterns are used for editorial sections on pages such as:

- Over ons
- Informatie
- Hulpverlening

The theme controls the visual layout and styling while WordPress manages the actual editorial content.

### Custom PHP

Custom PHP is used for functionality where structured data or server-side logic is more appropriate, including:

- course data
- registration forms
- event-support request forms
- form validation and email handling
- publications
- gallery management
- search
- pagination
- 404 handling

This keeps editorial content editable without forcing application logic into the block editor.

## Publications

Publications are managed through a custom post type.

Each publication can contain:

- publication type
- title
- publication date
- description
- PDF document
- automatically generated PDF preview when available

The public archive uses `WP_Query` with server-side pagination rather than loading the entire archive at once.

Separate lightweight queries are used for the latest publications and publication counts.

## Search

The theme contains a custom `search.php` template with:

- WordPress search results
- result counts
- excerpts
- no-results state
- search pagination
- responsive styling

Content stored through Gutenberg is searchable through the normal WordPress search system.

## Forms

The website contains custom forms for workflows such as:

- course registration
- membership registration
- lesson registration
- event-support requests

Form processing is handled server-side in PHP.

The implementation includes validation, sanitisation, redirects and email handling.

## Gallery

Gallery images are managed through the WordPress Media Library rather than being hardcoded directly into page templates.

This allows administrators to update images without modifying theme files.

## Theme structure

```text
ehbo-petrus-donders/
├── assets/
│   ├── css/
│   ├── images/
│   └── js/
│
├── inc/
│   ├── forms/
│   ├── post-types/
│   ├── assets.php
│   ├── courses.php
│   ├── editor.php
│   ├── gallery.php
│   ├── mail.php
│   ├── seo.php
│   └── setup.php
│
├── patterns/
│   └── reusable Gutenberg patterns
│
├── 404.php
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── search.php
├── page-*.php
└── style.css