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
    } elseif (is_post_type_archive("works")) {
        wp_enqueue_style("archive-works", get_template_directory_uri() . "/styles/works.css");
    } elseif (is_archive("service")) {
        wp_enqueue_style("archive-service", get_template_directory_uri() . "/styles/service.css");
    }
}
add_action("wp_enqueue_scripts", "add_style");

function add_js()
{
    wp_enqueue_script("gsap", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js");

    wp_enqueue_script("gsap-scrollTrigger", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js", array("gsap"), null, true);

    wp_enqueue_script("gsap-observer", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Observer.min.js", array("gsap"), null, true);


    wp_enqueue_script("main-js", get_template_directory_uri() . "/js/main.js", array("gsap", "gsap-scrollTrigger", "gsap-observer"), null, true);

    if (is_front_page() || is_home()) {
        wp_enqueue_script("swiper", "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js", array(), null, true);
        wp_enqueue_script("home-js", get_template_directory_uri() . "/js/home.js", array("gsap", "gsap-scrollTrigger", "gsap-observer", "swiper"), null, true);
    } else {
        wp_enqueue_script("sub-js", get_template_directory_uri() . "/js/sub.js", array(), null, true);
    }

    if(is_page("about")){
        wp_enqueue_script("about-js", get_template_directory_uri() . "/js/about.js", array(), null, true);
    }elseif(is_page("future")){
        wp_enqueue_script("future-js", get_template_directory_uri() . "/js/future.js", array(), null, true);
    }
}
add_action("wp_enqueue_scripts", "add_js");


function add_service_posts()
{
    register_post_type(
        "service",
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
        )
    );
}
add_action("init", "add_service_posts");


function add_works_posts()
{
    register_post_type(
        "works",
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
        )
    );
}
add_action("init", "add_works_posts");
