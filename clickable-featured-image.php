<?php
/*
Plugin Name: Clickable Featured Image
Plugin URI: https://wordpress.org/plugins/clickable-featured-image/
Description: A plugin that replaces the featured image in a post or page with one that is clickable if there is a featured image and links to the full size image.
Version: 1.0.5
Author: Devenia
Author URI: https://devenia.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function cfi_mark_post_featured_image_block($parsed_block) {
    if (!empty($parsed_block['blockName']) && $parsed_block['blockName'] === 'core/post-featured-image') {
        $GLOBALS['cfi_post_featured_image_block'] = $parsed_block;
    }
    return $parsed_block;
}
add_filter('render_block_data', 'cfi_mark_post_featured_image_block', 10, 1);

function cfi_wrap_featured_media($html, $anchor_open, $anchor_close) {
    if (preg_match('/<a\\s/i', $html)) {
        return $html;
    }

    if (preg_match('/<picture\\b/i', $html)) {
        $wrapped = preg_replace('/(<picture\\b[^>]*>.*?<\\/picture>)/is', $anchor_open . '$1' . $anchor_close, $html, 1);
        if (!empty($wrapped)) {
            return $wrapped;
        }
    }

    if (preg_match('/<img\\b/i', $html)) {
        $wrapped = preg_replace('/(<img\\b[^>]*>)/i', $anchor_open . '$1' . $anchor_close, $html, 1);
        if (!empty($wrapped)) {
            return $wrapped;
        }
    }

    return $anchor_open . $html . $anchor_close;
}

function cfi_clickable_featured_image($html, $post_id, $post_thumbnail_id) {
    $image_data = wp_get_attachment_image_src($post_thumbnail_id, 'full');

    // Check if $image_data is false, and if so, return the original $html.
    if ($image_data === false) {
        return $html;
    }

    $caption = get_the_title($post_thumbnail_id);
    $block_context = isset($GLOBALS['cfi_post_featured_image_block']) ? $GLOBALS['cfi_post_featured_image_block'] : null;
    $block_has_link = is_array($block_context) && !empty($block_context['attrs']['isLink']);
    $GLOBALS['cfi_post_featured_image_block'] = null;

    if (is_singular()) {
        $anchor_open = '<a href="' . esc_url($image_data[0]) . '" data-caption="' . esc_attr($caption) . '" class="cfi-featured-image-link">';
        $anchor_close = '</a>';
        $html = cfi_wrap_featured_media($html, $anchor_open, $anchor_close);
    } else {
        if ($block_has_link) {
            return $html;
        }
        $post_url = get_permalink($post_id);
        $anchor_open = '<a href="' . esc_url($post_url) . '" class="cfi-featured-image-link">';
        $anchor_close = '</a>';
        $html = cfi_wrap_featured_media($html, $anchor_open, $anchor_close);
    }

    return $html;
}

add_filter('post_thumbnail_html', 'cfi_clickable_featured_image', 10, 3);

function cfi_enqueue_styles() {
    if (!is_singular()) {
        wp_register_style('cfi-style', false, array(), '1.0.5');
        wp_enqueue_style('cfi-style');
        wp_add_inline_style('cfi-style', '
            .cfi-featured-image-link {
                display: block;
            }
            .cfi-featured-image-link img {
                display: block;
                width: 100%;
                height: auto;
            }
        ');
    }
}
add_action('wp_enqueue_scripts', 'cfi_enqueue_styles');

function cfi_enqueue_lightbox_assets() {
    if (is_singular() && has_post_thumbnail()) {
        add_filter('baguettebox_enqueue_assets', '__return_true');
    }
}
add_action('wp', 'cfi_enqueue_lightbox_assets');
