# Clickable Featured Image

Make featured images clickable. Opens in lightbox on posts, links to post on archives. Zero configuration.

[![WordPress Plugin Version](https://img.shields.io/wordpress/v/clickable-featured-image?style=flat-square)](https://wordpress.org/plugins/clickable-featured-image/)
[![WordPress Tested Up To](https://img.shields.io/wordpress/plugin/tested/clickable-featured-image?style=flat-square)](https://wordpress.org/plugins/clickable-featured-image/)
[![WordPress Rating](https://img.shields.io/wordpress/plugin/rating/clickable-featured-image?style=flat-square)](https://wordpress.org/plugins/clickable-featured-image/)

## Description

Clickable Featured Image for Lightbox & Archives is a WordPress plugin that enhances your featured images by making them clickable, opening the full-size image in a lightbox on single post pages, and linking to the post itself on archive pages like category listings.

## Features

- Make featured images clickable and open in a lightbox on single post pages
- Make featured images clickable and link to the post itself on archive pages
- Tested with "Lightbox for Gallery & Image Block" plugin
- Tested with GeneratePress theme

## Installation

1. Upload the folder `clickable-featured-image` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. That's it! The plugin will automatically make your featured images clickable on single post pages and archive pages.

## Frequently Asked Questions

### Does the plugin have a Settings page?

Currently, the functionality is so simple, that there is no need to set anything. Activate it, and it just works.

### Will this plugin work with any lightbox plugin?

This plugin has been tested with the "Lightbox for Gallery & Image Block" plugin, but it should work with other lightbox plugins as well.

### Will this plugin work with any WordPress theme?

Clickable Featured Image has been tested with the GeneratePress theme. It should work with most themes, but compatibility with all themes is not guaranteed.

### Can I use this plugin without a lightbox plugin?

Yes. The featured image will link directly to the full-size image file.

## Changelog

### 1.0.6
* Fixed: Prevent duplicate anchor tags on query loops when theme already wraps featured images

### 1.0.5
* Fixed: Added CSS to prevent layout spacing issues on archive pages with Twenty Twenty-Four theme

### 1.0.4
* Fixed: Avoid wrapping full block markup on archives by linking only the image/picture, reducing theme layout spacing issues

### 1.0.3
* Fixed: No longer breaks archive page links when theme already wraps featured images
* Fixed: Added proper URL escaping for security
* Tested compatibility with WordPress 6.9
* Updated minimum PHP requirement to 7.4

### 1.0.2
Fixed a syntax error in the plugin code that caused a parse error.

### 1.0.1
Updated stable tag and function names to follow guidelines for the Clickable Featured Image WordPress Plugin.

### 1.0
Initial release

## Upgrade Notice

### 1.0.6
Fixes duplicate link issue on query loops in Twenty Twenty-Four theme by detecting and skipping when theme already wraps images.

### 1.0.5
Fixes archive layout spacing issues on Twenty Twenty-Four theme by adding proper CSS for clickable featured images.

## License

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, or write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.

https://www.gnu.org/licenses/gpl-2.0.html
