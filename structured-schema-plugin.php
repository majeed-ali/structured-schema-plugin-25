<?php
/**
 * Plugin Name: Structured Schema Generator
 * Description: Automatically generates structured data (schema.org JSON-LD) for posts, pages, products, and more with user-customizable options.
 * Version: 2.0.0
 * Author: Abdul Majeed Ali
 */

// Prevent direct access
defined('ABSPATH') || exit;

// Load schema options
require_once plugin_dir_path(__FILE__) . 'ssg-options.php';

// Register schema injection
add_action('wp_head', 'ssg_output_all_schema', 5);

function ssg_output_all_schema() {
    if (get_option('ssg_enable_organization')) {
        ssg_output_schema(ssg_get_organization_schema());
    }

    if (!is_singular()) return;

    global $post;

    $post_type_schema = ssg_generate_schema($post);
    if ($post_type_schema) {
        ssg_output_schema($post_type_schema);
    }
}

function ssg_output_schema($schema) {
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
}

function ssg_generate_schema($post) {
    switch (get_post_type($post)) {
        case 'post':
            return ssg_blog_post_schema($post);
        case 'page':
            return ssg_page_schema($post);
        case 'product':
			// If WooCommerce is active, skip product schema to avoid duplication
            if (!class_exists('WooCommerce')) {
                return ssg_product_schema($post);
            } else {
                return null;
            }
        default:
            return null;
    }
}

// Include schema files
// Load plugin text domain for translations
require_once plugin_dir_path(__FILE__) . 'includes/loader.php';