<?php

function bw_portfolio_post_types()
{
    //Projects
    register_post_type("projects", array(
        "supports" => array("title", "editor", "page-attributes", "excerpt", "thumbnail"),
        "rewrite" => array("slug" => "projects"),
        "has_archive" => false,
        "public" => true,
        "show_in_rest" => true,
        "labels" => array(
            "name" => "Projects",
            "add_new_item" => "Add New Project",
            "edit_item" => "Edit Project",
            "all_items" => "All Projects",
            "singular_name" => "Projects"
        ),
        "menu_icon" => "dashicons-feedback"
    ));
}

add_action("init", "bw_portfolio_post_types");

