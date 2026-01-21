# Clickable Featured Image

- Contributors: basicus
- Donate link: https://devenia.com/
- Tags: featured-image, lightbox, clickable, post-thumbnail, gallery
- Requires at least: 5.4
- Tested up to: 6.9
- Requires PHP: 7.4
- Stable tag: 1.0.5
- License: GPLv2 or later
- License URI: http://www.gnu.org/licenses/gpl-2.0.html

Make featured images clickable. Opens in lightbox on posts, links to post on archives. Zero configuration.

== Description ==

Clickable Featured Image for Lightbox & Archives is a WordPress plugin that enhances your featured images by making them clickable, opening the full-size image in a lightbox on single post pages, and linking to the post itself on archive pages like category listings. This plugin has been tested with the "Lightbox for Gallery & Image Block" plugin and the GeneratePress theme.

== Features ==

- Make featured images clickable and open in a lightbox on single post pages
- Make featured images clickable and link to the post itself on archive pages
- Tested with "Lightbox for Gallery & Image Block" plugin
- Tested with GeneratePress theme

== Installation ==

1. Upload the folder `clickable-featured-image` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. That's it! The plugin will automatically make your featured images clickable on single post pages and archive pages.

== Frequently Asked Questions ==


= Does the plugin have a Settings page? =

Currently, the functionality is so simple, that there is no need to set anything. Activate it, and it just works.

= Will this plugin work with any lightbox plugin? =

This plugin has been tested with the "Lightbox for Gallery & Image Block" plugin, but it should work with other lightbox plugins as well. Please note that compatibility with other lightbox plugins is not guaranteed.

= Will this plugin work with any WordPress theme? =

Clickable Featured Image has been tested with the GeneratePress theme. It should work with most themes, but compatibility with all themes is not guaranteed. If you find any issues with your theme, please let us know.

= Can I use this plugin without a lightbox plugin? =

Yes. The featured image will link directly to the full-size image file.

== Changelog ==

= 1.0.5 =
* Fixed: Added CSS to prevent layout spacing issues on archive pages with Twenty Twenty-Four theme

= 1.0.4 =
* Fixed: Avoid wrapping full block markup on archives by linking only the image/picture, reducing theme layout spacing issues

= 1.0.3 =
* Fixed: No longer breaks archive page links when theme already wraps featured images
* Fixed: Added proper URL escaping for security
* Tested compatibility with WordPress 6.9
* Updated minimum PHP requirement to 7.4

= 1.0.2 =
Fixed a syntax error in the plugin code that caused a parse error.
= 1.0.1 =

Updated stable tag and function names to follow guidelines for the Clickable Featured Image WordPress Plugin.
= 1.0 =

Initial release
== Upgrade Notice ==

= 1.0.5 =
Fixes archive layout spacing issues on Twenty Twenty-Four theme by adding proper CSS for clickable featured images.

= 1.0.4 =
Fixes archive layout spacing issues in some themes by wrapping only the image/picture instead of the full block markup.

= 1.0.3 =
Fixes archive page compatibility issue. Now detects if theme already wraps images in links. Recommended update for all users.

= 1.0.2 =
Fixed a syntax error in the plugin code that caused a parse error. Please update to this version to ensure the plugin works correctly.

= 1.0.1 =
Updated stable tag and function names to follow guidelines for the Clickable Featured Image WordPress Plugin. Please update to this version to ensure compatibility with WordPress.org plugin directory.

= 1.0 =
Initial release
