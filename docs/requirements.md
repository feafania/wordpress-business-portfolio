# Project Requirements: Pixelcraft Studio (WordPress)

## 1. Custom Theme
- [ ] style.css with proper theme header
- [ ] functions.php, index.php, header.php, footer.php, page.php
- [ ] screenshot.png
- [ ] Template hierarchy for pages
- [ ] Archive template(s) created and working (archive.php / category.php if needed)
- [ ] theme.json (global styles, color palette)
- [ ] Enqueue compiled style.css and main.js (with defer)
- [ ] Theme supports: title-tag, post-thumbnails, menus, html5, custom-logo, automatic-feed-links

## 2. Elementor (Free)
- [ ] Elementor integrated with custom theme
- [ ] Page content built with Elementor (hero, columns, buttons)
- [ ] Header/footer via header.php / footer.php using wp_nav_menu
- [ ] "Full Width" page template
- [ ] No Elementor Pro features

## 3. Pages (min. 5)
- [ ] Home
- [ ] About
- [ ] Services
- [ ] Projects
- [ ] Contact
- [ ] Realistic structured content (headings, sections, lists, CTAs)

## 4. Contact Form (Contact Form 7 or Forminator)
- [ ] Implemented with Contact Form 7 or Forminator (free)
- [ ] Fields: Name, Email, Message (+ optional consent)
- [ ] Validation and success message
- [ ] Spam protection (honeypot / reCAPTCHA v3)
- [ ] Recipient email set in WP admin (not hardcoded)

## 5. Projects (Custom Post Type)
- [ ] CPT `project` (title, editor, thumbnail, excerpt, custom-fields)
- [ ] Taxonomy `project-type` (Web, App, E-commerce)
- [ ] archive-project.php (project grid)
- [ ] Optional: taxonomy filters
- [ ] single-project.php (description, features, tech stack)
- [ ] Custom fields: project_url, repo_url, client_name
- [ ] At least 6 sample projects with featured images and terms

## 6. SEO (Yoast OR Rank Math, not both)
- [ ] Site title and meta description templates
- [ ] XML sitemap enabled
- [ ] Breadcrumbs
- [ ] Permalinks: /%postname%/
- [ ] Open Graph + Twitter Cards
- [ ] JSON-LD on project pages (CreativeWork)
- [ ] Clean heading hierarchy
- [ ] Image alt text
- [ ] Canonical URLs
- [ ] Robots.txt defaults verified

## 7. Accessibility & Performance

### Accessibility (WCAG 2.1 AA)
- [ ] Sufficient color contrast 
- [ ] Visible focus states
- [ ] Semantic landmarks (header, main, footer)
- [ ] Keyboard-accessible navigation
- [ ] aria-current on active menu link
- [ ] Form labels and error messages

### Performance
- [ ] Lighthouse Performance >= 80 (desktop)
- [ ] No layout shifts (CLS)
- [ ] Responsive images (srcset, sizes)
- [ ] loading="lazy"
- [ ] Minified assets

## 8. Tooling
- [ ] Git repository with clear commits
- [ ] README.md (setup instructions + plugin list)
- [ ] Use fake/demo data where needed
- [ ] Document assumptions