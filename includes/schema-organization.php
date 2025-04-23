<?php
function ssg_get_organization_schema() {
    return [
        "@context" => "https://schema.org",
        "@type" => get_option('ssg_organization_type', 'Organization'),
        "name" => get_option('ssg_organization_name', get_bloginfo('name')),
        "url" => home_url(),
        "logo" => get_site_icon_url(),
        "sameAs" => [
            get_option('ssg_social_facebook'),
            get_option('ssg_social_instagram')
        ]
    ];
}