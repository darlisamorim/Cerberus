# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
and adheres to [Semantic Versioning](https://semver.org/).

---

## [1.1.0] – 2025-07-17

### Added
- `rss.php` file for dynamic RSS feed generation.
- `sitemap.php` file for automatic XML sitemap creation.
- `.htaccess` file with rewrite rules for clean URLs like `/rss.xml` and `/sitemap.xml`.
- `foreach`-based templates for generating RSS `<item>` and sitemap `<url>` entries dynamically.
- Official reference links for RSS 2.0 and Sitemap Protocol added to `README.md`.
- Descriptive improvements to file tree section in the project structure.

### Documentation
- New complete section in `README.md` covering RSS, Sitemap, SEO techniques and best practices.
- Explained how to use dynamic PHP variables and headers to output valid RSS/XML content.
- Highlights on SEO-friendly URLs using `.htaccess`.

### Fixed
- Grammar correction: "Os arquivo e pastas..." changed to "Os arquivos e pastas..."
- Improved directory descriptions for clarity and accuracy.
- Text cohesion and clarity improved across project explanation.

---

## [1.0.0] – 2025-07-08

### Added
- Initial version of the Cerberus project template.
- Folder structure: `app/`, `routes/`, `resources/`, `public/`.
- Base files like `index.php`, `composer.json`, and `web.php`.
- Standard PHPDoc header comments in all `.php` files (based on PHP-FIG recommendations).
- Complete usage tutorial inside `README.md`.

### Changed
- Nothing changed in this initial version.

### Removed
- Nothing removed in this version.
