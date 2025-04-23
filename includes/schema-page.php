<?php
function ssg_page_schema($post) {
    return [
        "@context" => "https://schema.org",
        "@type" => "WebPage",
        "url" => get_permalink($post),
        "name" => get_the_title($post),
        "description" => get_the_excerpt($post),
    ];
}