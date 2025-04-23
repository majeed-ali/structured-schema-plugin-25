# 🧠 Structured Schema Generator

Automatically inject [schema.org](https://schema.org) structured data into your WordPress site — supporting blog posts, pages, products, organization details, and rich snippets like `AggregateRating`. Boost your SEO and eligibility for rich results in Google with ease.

---

## 🚀 Features

- ✅ Auto-generates schema for:
  - Blog posts (`BlogPosting`)
  - Pages (`WebPage`)
  - WooCommerce Products (`Product`)
  - Organization / LocalBusiness
- ✅ Adds `AggregateRating` with customizable star values and review counts
- ✅ Auto-injection into `<head>` as valid `application/ld+json`
- ✅ Skips product schema if WooCommerce already handles it (no conflicts!)
- ✅ User-friendly admin settings panel for customization
- ✅ Lightweight, performance-optimized, and extensible

---

## 🛠 Admin Settings

Access via `Settings > Structured Schema` to:

- Set organization type (e.g., Organization, Restaurant, Store)
- Input brand name, logo, social links
- Define rating stars and number of reviews
- Toggle schema on/off for organization globally

---

## 💡 Usage

1. Upload and activate the plugin
2. Go to **Settings → Structured Schema**
3. Configure your schema options
4. That’s it! Schema is now auto-generated per post type

---

## 🧩 Extensibility (Planned in Pro)

- FAQPage schema (via metabox or block)
- Review schema
- Breadcrumb schema
- Event, Course, and Custom Post Types
- Real-time schema preview
- Multisite & white-label support

---

## 📦 Installation

### From WordPress Admin:
- Upload `structured-schema-plugin.zip` via Plugins > Add New > Upload Plugin
- Activate and configure under **Settings > Structured Schema**

### Manually via FTP:
- Upload folder to `/wp-content/plugins/`
- Activate plugin in WordPress admin

---

## 🛡 Compatibility

- ✅ WordPress 5.6+
- ✅ WooCommerce (auto-detects and respects its native schema)
- ✅ SEO plugins like RankMath, Yoast

---

## Author

- Abdul Majeed Ali

---

## 📄 License

Licensed under the [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html).
