=== Structured Schema Generator ===
Contributors: majeed-ali
Tags: schema, structured data, seo, json-ld, schema.org, rich snippets, woocommerce, organization
Requires at least: 5.6
Tested up to: 6.8
Requires PHP: 7.4
Stable tag: 2.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Automatically generate structured data (schema.org JSON-LD) for your WordPress posts, pages, products, and organization info. Improve SEO, visibility, and eligibility for Google rich results.

== Description ==

Structured Schema Generator is a lightweight yet powerful plugin that injects valid [schema.org](https://schema.org) structured data into your website, including:

* Blog posts (`BlogPosting`)
* Pages (`WebPage`)
* Products (`Product`, if WooCommerce is inactive)
* Organization or LocalBusiness
* Aggregate ratings and reviews

It improves your site's SEO and enhances eligibility for Google rich results by embedding `JSON-LD` schema automatically in the `<head>` of your pages.

**Features:**

* Auto-detects post type and generates schema accordingly
* Allows manual input of review star rating and count
* Organization schema with selectable type (Organization, LocalBusiness, etc.)
* Optional disabling of product schema if WooCommerce is active
* Seamless integration with any theme
* Does not bloat the database or affect page speed

== Installation ==

1. Upload the plugin folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the "Plugins" menu in WordPress.
3. Navigate to **Settings > Structured Schema** and configure your schema options.

== Frequently Asked Questions ==

= Will this plugin slow down my site? =
No, it's designed to be lightweight. Schema is generated on-the-fly without storing extra data.

= Will it conflict with Yoast SEO or RankMath? =
No, it plays well with major SEO plugins. It only injects structured data if it isn't already provided.

= Can I control the schema per post? =
Currently, global settings are available in the free version. Per-post overrides may be added in a Pro version.

== Changelog ==

= 2.0.1 =
* Added WooCommerce conflict detection — plugin skips product schema if WC is active
* Added license compatibility for WordPress.org compliance
* Minor code cleanup and documentation

= 2.0.0 =
* Plugin fully launched with blog, page, product, and organization schema support
* Added settings panel for customizing schema output

== Upgrade Notice ==

= 2.0.1 =
This version includes WooCommerce compatibility and resolves structured data conflicts.

== License ==

Structured Schema Generator is free software: you can redistribute it and/or modify it under the terms of the [GNU General Public License](https://www.gnu.org/licenses/gpl-2.0.html) as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.

This plugin is distributed in the hope that it will be useful, but **without any warranty**; without even the implied warranty of **merchantability or fitness for a particular purpose**.