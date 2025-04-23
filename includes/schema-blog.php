<?php
function ssg_blog_post_schema($post) {
    return [
        "@context" => "https://schema.org",
        "@type" => "BlogPosting",
        "mainEntityOfPage" => get_permalink($post),
        "headline" => get_the_title($post),
        "description" => get_the_excerpt($post),
        "image" => get_the_post_thumbnail_url($post, 'full'),
        "datePublished" => get_the_date('c', $post),
        "dateModified" => get_the_modified_date('c', $post),
        "author" => [
            "@type" => "Person",
            "name" => get_the_author_meta('display_name', $post->post_author),
        ],
        "publisher" => [
            "@type" => "Organization",
            "name" => get_option('ssg_organization_name', get_bloginfo('name')),
            "logo" => [
                "@type" => "ImageObject",
                "url" => get_site_icon_url(),
            ]
        ],
        "aggregateRating" => [
            "@type" => "AggregateRating",
            "ratingValue" => get_option('ssg_rating_value', '4.5'),
            "reviewCount" => get_option('ssg_review_count', '123')
        ]
    ];
}