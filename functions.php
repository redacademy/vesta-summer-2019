
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
    // Flickity
    wp_enqueue_style('flickity_styles', "https://unpkg.com/flickity@2/dist/flickity.min.css");
    wp_enqueue_script('flickity_scripts', "https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js");
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


// Initialize Sidebars
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
        'before_widget' => '<aside class="story-padding"><div id="%1$s" class="%2$s customer-story-box">',
        'after_widget' => '</div></aside>',
        'before_title' => '<h2>',
        'after_title' => '</h2><img class="quote-icon" src="' . get_template_directory_uri() . '/images/icons/iconQuote.svg" alt="quote icon">'
    ));
    // Contact Us - Contact Info
    register_sidebar( array(
        'name' => esc_html('Contact'),
        'id' => 'sidebar-contact',
        'description' => 'Edit contact information.',
        'class' => 'contact-info-widget',
        'before_widget' => '<aside id="%1$s" class="%2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    //How it works - Community Sidebar
    register_sidebar( array(
        'name' => esc_html('How it Works - Community'),
        'id' => 'sidebar-community',
        'description' => 'Video and information about Community.',
        'class' => 'community-widget',
        'before_widget' => '<div class="steps-container">  ',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    //How it works - Workplace Sidebar
    register_sidebar( array(
        'name' => esc_html('How it Works - Workplace'),
        'id' => 'sidebar-workplace',
        'description' => 'Video and information about Workplace.',
        'class' => 'workplace-widget',
        'before_widget' => '<div class="steps-container">  ',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'vesta_sidebars_widgets');

// Allow .svg uploads
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');



//   Pagination Offset

function pre_query_resource_offset(&$query) {

    // only continue if this is the main query on the homepage
    if ( !$query->is_home() || !$query->is_main_query() ) 
        return;

    $posts_to_skip = 1;  // the number of most recent posts to skip
    $posts_per_page = get_option('posts_per_page'); // get posts per page from WP settings

   //Detect and handle pagination...
     if ( !$query->is_paged ) // if we're on the first page...
        $offset = $posts_to_skip; //...just offset by the number of posts to skip
    else 
        // Calculate the page offset if we are not on the first page
        $offset = $posts_to_skip + ( ($query->query_vars['paged']-1) * $posts_per_page );

    $query->set('offset',$offset);  // set the offset for the query
}
add_action('pre_get_posts', 'pre_query_resource_offset', 1 );

add_filter('found_posts', 'adjust_homepage_offset_pagination', 1, 2 );
function adjust_homepage_offset_pagination($found_posts, $query) {

    // return the actual value if this isn't the main query on the homepage
    if ( !$query->is_home() || !$query->is_main_query() ) 
        return $found_posts;

    $posts_to_skip = 1; // the number of posts to skip
    return $found_posts - $posts_to_skip;
}






?>