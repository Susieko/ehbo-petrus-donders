# EHBO Petrus Donders — Custom WordPress Theme

A custom WordPress theme built for **EHBO vereniging Petrus Donders** in Tilburg, the Netherlands.

The project focuses on clear information architecture, accessible navigation, responsive layouts, maintainable WordPress code, and practical workflows for a volunteer-run first-aid association.

## Project goals

The previous site was rebuilt into a modern multi-page WordPress website with a calmer visual hierarchy and clearer routes for visitors who want to:

- learn about the association;
- view EHBO courses and training;
- request first-aid support for events;
- register for courses or lesson evenings;
- read publications;
- browse the photo gallery;
- become a member or volunteer;
- contact the association.

## Tech stack

- WordPress
- PHP
- HTML5
- CSS3
- Vanilla JavaScript
- Git

## Theme architecture

The theme keeps `functions.php` small and loads separate modules for specific responsibilities.

```text
ehbo-petrus-donders/
├── assets/
│   ├── css/
│   ├── images/
│   └── js/
├── inc/
│   ├── forms/
│   │   ├── assistance.php
│   │   ├── contact.php
│   │   ├── lesson.php
│   │   └── registration.php
│   ├── post-types/
│   │   └── publications.php
│   ├── assets.php
│   ├── courses.php
│   ├── gallery.php
│   ├── mail.php
│   ├── seo.php
│   └── setup.php
├── functions.php
├── header.php
├── footer.php
└── page-*.php
```

This structure separates theme setup, asset loading, form processing, custom content, gallery management, SEO, and other site logic instead of placing everything in one large file.

## WordPress features

### Publications

Publications are managed through a custom post type. Editors can add publication details and select PDF files through the WordPress Media Library.

### Photo gallery

The gallery is managed from the WordPress page editor using the Media Library. Images can be selected, removed, and reordered without editing theme files.

Image titles, captions, and alt text are read from WordPress attachment data.

### Shared course configuration

Course names and identifiers are stored in one shared PHP configuration.

The registration form and server-side validation both use the same course list, which prevents the frontend and backend from getting out of sync when a course is added or changed.

## Forms

The theme contains custom WordPress form handlers for:

- general contact;
- course and membership registration;
- lesson-evening registration;
- first-aid assistance requests.

The handlers include:

- WordPress nonces;
- input sanitization;
- email validation;
- allowed-value checks;
- honeypot spam fields;
- safe redirects;
- `wp_mail()` integration.

## Accessibility

Accessibility was considered throughout the build, including:

- semantic page structure;
- a skip link;
- visible keyboard focus states;
- keyboard-accessible desktop dropdown navigation;
- accessible mobile navigation;
- reduced-motion support;
- descriptive image alt text;
- appropriate form labels and status messages.

## Responsive design

The site was designed for desktop, tablet, and mobile layouts.

The navigation switches to a dedicated mobile menu on smaller screens, while gallery layouts, course sections, forms, and content grids adapt to available space.

## Performance

Images and frontend assets were optimized during development.

At the final local QA stage, Lighthouse reported:

- **Performance: 100**
- **Accessibility: 100**
- **SEO: 100**

Scores can vary depending on hosting, browser version, network conditions, and production configuration.

## Environment portability

Internal theme and site URLs use WordPress helpers such as `home_url()`, `get_theme_file_uri()`, and `wp_upload_dir()` instead of local development URLs.

This keeps the theme portable between local development and production environments.

## Development workflow

Git is used throughout the project with small commits for individual refactors and features.

Examples include:

- splitting theme setup into modules;
- extracting form handlers;
- moving publication logic into a dedicated module;
- adding Media Library gallery management;
- centralizing course configuration;
- removing obsolete navigation JavaScript;
- cleaning duplicate CSS;
- removing hard-coded local URLs.

## Running the theme locally

1. Install WordPress in a local development environment.
2. Place this repository in:

   ```text
   wp-content/themes/ehbo-petrus-donders
   ```

3. Activate **EHBO Petrus Donders** in the WordPress admin.
4. Create the required WordPress pages and assign the matching page templates.
5. Configure the WordPress admin email address used by the custom forms.
6. Add the required media, gallery images, and publications through the WordPress admin.
7. Refresh WordPress permalinks after setup if necessary.

## Status

The theme is being prepared for production deployment and portfolio presentation.

The final production setup still depends on the live WordPress environment, mail configuration, hosting, SSL, and production content.

---

Built as a custom WordPress project with a focus on maintainability, accessibility, and a clear experience for both visitors and site editors.
