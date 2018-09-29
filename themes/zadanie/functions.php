<?php
/* add settings functions in Appearence->Customize*/
require get_template_directory() . '/inc/customizer.php';

/* registre menus - menu-home, menu-prod */
function registerMenus() {
    register_nav_menus(
            array(
                'menu-main' => __('Main Menu'),
                'menu-prod' => __('Products Menu')
            )
    );
}

/* add css - reset.css */
//function addAssetsStyle() {
//    wp_register_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
//    wp_enqueue_style('reset');
//}

/* add products type */
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Products', 'Post Type General Name', 'zadanie' ),
        'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'zadanie' ),
        'menu_name'           => __( 'Products', 'zadanie' ),
        'parent_item_colon'   => __( 'Parent Product', 'zadanie' ),
        'all_items'           => __( 'All Products', 'zadanie' ),
        'view_item'           => __( 'View Product', 'zadanie' ),
        'add_new_item'        => __( 'Add New Product', 'zadanie' ),
        'add_new'             => __( 'Add New', 'zadanie' ),
        'edit_item'           => __( 'Edit Product', 'zadanie' ),
        'update_item'         => __( 'Update Product', 'zadanie' ),
        'search_items'        => __( 'Search Product', 'zadanie' ),
        'not_found'           => __( 'Not Found', 'zadanie' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'zadanie' ),
    );
     
    // Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'Products', 'zadanie' ),
        'description'         => __( 'Product in offert', 'zadanie' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        //'rewrite'            => array( 'slug' => 'product' ),
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'product', $args ); 
}

/*  WP Hide Post in admin panel */
function post_remove() {
    remove_menu_page( 'edit.php' );
}

//add_action('wp_enqueue_scripts', 'addAssetsStyle');
add_action('init', 'registerMenus');
add_action('init', 'custom_post_type', 0 );
add_action('admin_menu', 'post_remove');

?>