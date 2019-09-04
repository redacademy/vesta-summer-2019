
<?php 

// Add scripts and stylesheets
function vesta_files() {
    wp_enqueue_style('vesta_workplace_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_script('test_js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
};

add_action('wp_enqueue_scripts', 'vesta_files');

// Add theme support (ex: title and tag, featured img)
function vesta_features() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
        'sub_footer' => 'Sub-Footer Menu'
    ));
}

add_action('after_setup_theme', 'vesta_features'); 

// Initialize Custom Post-Type: FAQs
function vesta_custom_post() {
    register_post_type('faqs', array(
        'supports' => array('title', 'editor', 'author'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'FAQs',
            'add_new' => 'Add New FAQ',
            'add_new_item' => 'FAQ',
            'edit_item' => 'Edit FAQ',
            'all_items' => 'All FAQs',
            'singular_name' => 'FAQ'
         ),
         'menu_icon' => 'dashicons-editor-help'
         
    ));
}

add_action('init', 'vesta_custom_post');

// Custom Taxonomies
function vesta_register_taxonomies() {
    register_taxonomy('faq_category', 'faqs', array(  
        'show_in_rest' => true,
        'hierarchical' => true,
        'public' => true,
        'labels' => array(
            'name' => 'FAQ Categories',
            'singular_name' => 'FAQ Category'
        )
    ));
}
add_action('init', 'vesta_register_taxonomies');







?>