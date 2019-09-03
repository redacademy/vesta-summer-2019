
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
        'footer' => 'Footer Menu'
    ));
}

add_action('after_setup_theme', 'vesta_features'); 







?>