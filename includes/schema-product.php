<?php
function ssg_product_schema($post) {
    return [
        "@context" => "https://schema.org",
        "@type" => "Product",
        "name" => get_the_title($post),
        "image" => get_the_post_thumbnail_url($post, 'full'),
        "description" => get_the_excerpt($post),
        "url" => get_permalink($post),
        "offers" => [
            "@type" => "Offer",
            "priceCurrency" => 'USD',
            "price" => get_post_meta($post->ID, '_price', true),
            "availability" => "https://schema.org/InStock",
            "url" => get_permalink($post)
        ]
    ];
}