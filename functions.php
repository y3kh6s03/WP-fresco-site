<?php
function add_style()
{
    wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@700&family=Noto+Sans+JP:wght@300;500&family=Noto+Sans:wght@300;800&display=swap");

    if (is_front_page() || is_home()) {
        wp_enqueue_style("top", get_template_directory_uri() . "/styles/home.css");
    } elseif (is_page("about")) {
        wp_enqueue_style("page-about", get_template_directory_uri() . "/styles/about.css");
    } elseif (is_page("future")) {
        wp_enqueue_style("page-future", get_template_directory_uri() . "/styles/future.css");
    } elseif (is_singular("service")) {
        wp_enqueue_style("service-detail", get_template_directory_uri() . "/styles/service-detail.css");
    } elseif (is_archive("service")) {
        wp_enqueue_style("archive-service", get_template_directory_uri() . "/styles/service.css");
    }
}
add_action("wp_enqueue_scripts", "add_style");

function add_service_posts()
{
    register_post_type("service",
    array(
        "label" => "service",
        "public" => true,
        "has_archive" => true,
        "show_in_rest" => true,
        "menu_position" => 4,
        "hierarchical" => true,
        "supports" => array(
          "title",
          "editor",
          "thumbnail",
          "revisions",
          "custom-fields"
        ),
    ));
}
add_action("init", "add_service_posts");

function add_works_posts()
{
    register_post_type("works",
    array(
        "label" => "works",
        "public" => true,
        "has_archive" => true,
        "show_in_rest" => true,
        "menu_position" => 5,
        "hierarchical" => true,
        "supports" => array(
          "title",
          "editor",
          "thumbnail",
          "revisions",
        ),
    ));
}
add_action("init", "add_works_posts");




?>