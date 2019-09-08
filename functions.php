
<?php 

// Add scripts and stylesheets
function vesta_files() {
    wp_enqueue_style('vesta_workplace_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('custom-fa', "https://use.fontawesome.com/releases/v5.8.2/css/all.css");
    wp_enqueue_script('vesta_scripts_js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
    wp_localize_script('vesta_scripts_js', 'vestaVariables', array(
        'templateUrl' => get_template_directory_uri(),
        'homeUrl' => get_home_url(),
        'resourcesUrl' => get_post_type_archive_link('post'),
    ));
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


// Initalize Sidebars
function vesta_sidebars_widgets() {
    // Front Page - "The Problem"
    register_sidebar( array(
        'name' => esc_html('Front Page - The Problem'),
        'id' => 'sidebar-the-prob',
        'description' => 'Place content here for "The Problem" section on front page.',
        'class' => 'frontpg-prob',
        'before_widget' => '<section id="%1$s" class="%2$s">',
        'after_widget' => '</section>',
        'before_title' => '',
        'after_title' => ''
    ));
    // Front Page - "Customer Stories"
    register_sidebar( array(
        'name' => esc_html('Front Page - Customer Stories'),
        'id' => 'sidebar-stories',
        'description' => 'Drag a new text widget in here for a new customer story.',
        'class' => 'frontpg-stories',
        'before_widget' => '<section id="%1$s" class="%2$s">',
        'after_widget' => '</section>',
        'before_title' => '',
        'after_title' => ''
    ));
    // Contact Us - Contact Info
    register_sidebar( array(
        'name' => esc_html('Contact Us Page - Contact Info'),
        'id' => 'sidebar-contact',
        'description' => 'Edit contact information.',
        'class' => 'contact-info-widget',
        'before_widget' => '<aside id="%1$s" class="%2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'vesta_sidebars_widgets');




?>