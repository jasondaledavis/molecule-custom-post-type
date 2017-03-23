<?php
// Register Custom Post Type
function projects() {

    $labels = array(
        'name'                  => _x( 'Projects', 'Projects', 'elements' ),
        'singular_name'         => _x( 'Project', 'Project', 'elements' ),
        'menu_name'             => __( 'Projects', 'elements' ),
        'name_admin_bar'        => __( 'Projects', 'elements' ),
        'archives'              => __( 'Project Archives', 'elements' ),
        'parent_item_colon'     => __( 'Parent Project:', 'elements' ),
        'all_items'             => __( 'All Project', 'elements' ),
        'add_new_item'          => __( 'Add New Project', 'elements' ),
        'add_new'               => __( 'Add New Project', 'elements' ),
        'new_item'              => __( 'New Project', 'elements' ),
        'edit_item'             => __( 'Edit Project', 'elements' ),
        'update_item'           => __( 'Update Project', 'elements' ),
        'view_item'             => __( 'View Project', 'elements' ),
        'search_items'          => __( 'Search Project', 'elements' ),
        'not_found'             => __( 'Not found', 'elements' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'elements' ),
        'featured_image'        => __( 'Featured Image', 'elements' ),
        'set_featured_image'    => __( 'Set featured image', 'elements' ),
        'remove_featured_image' => __( 'Remove featured image', 'elements' ),
        'use_featured_image'    => __( 'Use as featured image', 'elements' ),
        'insert_into_item'      => __( 'Insert into Project', 'elements' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Project', 'elements' ),
        'items_list'            => __( 'Projects list', 'elements' ),
        'items_list_navigation' => __( 'Projects list navigation', 'elements' ),
        'filter_items_list'     => __( 'Filter Projects list', 'elements' ),
    );
    $args = array(
        'label'                 => __( 'Project', 'elements' ),
        'description'           => __( 'Portfolio of Proejcts', 'elements' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', ),
        'taxonomies'            => array( 'project-type' ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-images-alt2',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'projects', $args );

}
add_action( 'init', 'projects', 0 );

// Register Custom Taxonomy
function project_type() {

    $labels = array(
        'name'                       => _x( 'Project Types', 'Taxonomy General Name', 'elements' ),
        'singular_name'              => _x( 'Project Type', 'Taxonomy Singular Name', 'elements' ),
        'menu_name'                  => __( 'Project Type', 'elements' ),
        'all_items'                  => __( 'All Project Types', 'elements' ),
        'parent_item'                => __( 'Parent Project Type', 'elements' ),
        'parent_item_colon'          => __( 'Parent Item:', 'elements' ),
        'new_item_name'              => __( 'New Project Type Name', 'elements' ),
        'add_new_item'               => __( 'Add New Project Type', 'elements' ),
        'edit_item'                  => __( 'Edit Project Type', 'elements' ),
        'update_item'                => __( 'Update Project Type', 'elements' ),
        'view_item'                  => __( 'View Project Type', 'elements' ),
        'separate_items_with_commas' => __( 'Separate Project Types with commas', 'elements' ),
        'add_or_remove_items'        => __( 'Add or remove Project Types', 'elements' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'elements' ),
        'popular_items'              => __( 'Popular Project Types', 'elements' ),
        'search_items'               => __( 'Search Project Types', 'elements' ),
        'not_found'                  => __( 'Not Found', 'elements' ),
        'no_terms'                   => __( 'No Project Types', 'elements' ),
        'items_list'                 => __( 'Project Types list', 'elements' ),
        'items_list_navigation'      => __( 'Project Types list navigation', 'elements' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
    );
    register_taxonomy( 'project-types', array( 'projects' ), $args );

}
add_action( 'init', 'project_type', 0 );

// Register Custom Post Type for Landing Pages
function landing_pages() {

    $labels = array(
        'name'                  => _x( 'Landing Pages', 'Post Type General Name', 'elements' ),
        'singular_name'         => _x( 'Landing Page', 'Post Type Singular Name', 'elements' ),
        'menu_name'             => __( 'Landing Pages', 'elements' ),
        'name_admin_bar'        => __( 'Landing Pages', 'elements' ),
        'parent_item_colon'     => __( 'Parent Item:', 'elements' ),
        'all_items'             => __( 'All Items', 'elements' ),
        'add_new_item'          => __( 'Add New Item', 'elements' ),
        'add_new'               => __( 'Add New', 'elements' ),
        'new_item'              => __( 'New Item', 'elements' ),
        'edit_item'             => __( 'Edit Item', 'elements' ),
        'update_item'           => __( 'Update Item', 'elements' ),
        'view_item'             => __( 'View Item', 'elements' ),
        'search_items'          => __( 'Search Item', 'elements' ),
        'not_found'             => __( 'Not found', 'elements' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'elements' ),
        'items_list'            => __( 'Items list', 'elements' ),
        'items_list_navigation' => __( 'Items list navigation', 'elements' ),
        'filter_items_list'     => __( 'Filter items list', 'elements' ),
    );
    $args = array(
        'label'                 => __( 'Landing Page', 'elements' ),
        'description'           => __( 'Landing Pages for Inbound Marketing', 'elements' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-media-document',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,       
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'lander', $args );

}
add_action( 'init', 'landing_pages', 0 );

// Register Custom Post Type Thank You Page
function thank_you_pages() {

    $labels = array(
        'name'                  => _x( 'TY Pages', 'Post Type General Name', 'elements' ),
        'singular_name'         => _x( 'TY Page', 'Post Type Singular Name', 'elements' ),
        'menu_name'             => __( 'TY Pages', 'elements' ),
        'name_admin_bar'        => __( 'TY Pages', 'elements' ),
        'parent_item_colon'     => __( 'Parent Item:', 'elements' ),
        'all_items'             => __( 'All Items', 'elements' ),
        'add_new_item'          => __( 'Add New Item', 'elements' ),
        'add_new'               => __( 'Add New', 'elements' ),
        'new_item'              => __( 'New Item', 'elements' ),
        'edit_item'             => __( 'Edit Item', 'elements' ),
        'update_item'           => __( 'Update Item', 'elements' ),
        'view_item'             => __( 'View Item', 'elements' ),
        'search_items'          => __( 'Search Item', 'elements' ),
        'not_found'             => __( 'Not found', 'elements' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'elements' ),
        'items_list'            => __( 'Items list', 'elements' ),
        'items_list_navigation' => __( 'Items list navigation', 'elements' ),
        'filter_items_list'     => __( 'Filter items list', 'elements' ),
    );
    $args = array(
        'label'                 => __( 'TY Page', 'elements' ),
        'description'           => __( 'TY Pages for Inbound Marketing', 'elements' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-smiley',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,       
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'ty', $args );

}
add_action( 'init', 'thank_you_pages', 0 );