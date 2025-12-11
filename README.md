# Clickable Featured Image

**Make featured images clickable.** Lightbox on posts, links on archives. Zero config.

[![WordPress](https://img.shields.io/badge/WordPress-5.0%2B-blue.svg)](https://wordpress.org)
[![License: GPL v2](https://img.shields.io/badge/License-GPL%20v2-blue.svg)](https://www.gnu.org/licenses/gpl-2.0)

## What It Does

Makes your featured images clickable:

- **On single posts/pages:** Clicks open the full-size image in a lightbox
- **On archives/loops:** Clicks go to the post

Simple, automatic, no settings to configure.

## Why?

Featured images in WordPress are not clickable by default. Visitors expect to click images. This plugin fixes that with zero configuration.

## Installation

1. Download from [Releases](https://github.com/bjornfix/clickable-featured-image/releases)
2. Upload via WordPress Admin → Plugins → Add New → Upload Plugin
3. Activate

Done. No settings, just works.

## Features

- Wraps featured images in appropriate links
- Uses BaguetteBox for lightbox (if available)
- Prevents nested link issues
- Works with any theme using `post_thumbnail_html` filter
- Preserves image captions for lightbox

## How It Works

The plugin hooks into WordPress's `post_thumbnail_html` filter:

- `is_singular()` = true → Links to full-size image (lightbox)
- `is_singular()` = false → Links to post permalink

Skips images already wrapped in links to prevent HTML issues.

## Requirements

- WordPress 5.0+
- For lightbox: BaguetteBox (optional, theme must provide)

## Changelog

### 1.0.3
- Fixed: No longer breaks archive page links when theme already wraps featured images
- Fixed: Added proper URL escaping for security
- Tested compatibility with WordPress 6.9

### 1.0.2
- Fixed syntax error that caused parse error

### 1.0.1
- Updated stable tag and function names to follow WordPress.org guidelines

### 1.0
- Initial release

## License

GPL-2.0+

## Author

[Devenia](https://devenia.com) - We've been doing SEO and web development since 1993.

## Links

- [Plugin Page](https://devenia.com/plugins/clickable-featured-image/)
- [WordPress.org](https://wordpress.org/plugins/clickable-featured-image/)
