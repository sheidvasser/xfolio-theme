<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('output', get_template_directory_uri() . '/assets/css/output.css', [], '1.0.4');

    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', [], '1.0.0', true);
    wp_enqueue_script('divider', get_template_directory_uri() . '/assets/js/divider.js', ['script'], '1.0.0', true);
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', ['script'], '1.0.0', true);
});

add_action('after_setup_theme', function () {
    register_nav_menus([
        'top' => 'Header menu',
        'bottom' => 'Footer menu',
    ]);

    add_theme_support('post-thumbnails', array('post', 'portfolio'));
});

add_filter('nav_menu_css_class', 'nav_menu_css_class_filter', 10, 4);

function nav_menu_css_class_filter($classes, $item, $args, $depth)
{
    if ($args->theme_location === 'top') {
        $classes = [
            'nav-item',
        ];
    }
    if ($args->theme_location === 'bottom') {
        $classes = [
            'footer-item',
        ];
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'nav_menu_link_attributes_filter', 10, 4);

function nav_menu_link_attributes_filter($atts, $menu_item, $args, $depth)
{
    if ($args->theme_location === 'top') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}

add_action('init', function () {

    register_post_type('portfolio', [
        'label' => null,
        'labels' => [
            'name' => 'Portfolio',
            'singular_name' => 'Portfolio',
            'add_new' => 'Add portfolio',
            'add_new_item' => 'Add portfolio',
            'edit_item' => 'Edit portfolio',
            'new_item' => 'New portfolio',
            'view_item' => 'View portfolio',
            'search_items' => 'Search portfolio',
            'not_found' => 'Not found',
            'not_found_in_trash' => 'Not found in bin',
            'parent_item_colon' => '',
            'menu_name' => 'Portfolio',
        ],
        'description' => '',
        'public' => true,
        'show_in_menu' => null,
        'show_in_rest' => true,
        'rest_base' => null,
        'menu_position' => null,
        'menu_icon' => null,
        'hierarchical' => false,
        'supports' => ['title', 'editor', 'thumbnail'],
        'taxonomies' => [],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

});


add_action('init', function () {

    register_post_type('review', [
        'label' => null,
        'labels' => [
            'name' => 'Review',
            'singular_name' => 'Review',
            'add_new' => 'Add review',
            'add_new_item' => 'Add review',
            'edit_item' => 'Edit review',
            'new_item' => 'New review',
            'view_item' => 'View review',
            'search_items' => 'Search review',
            'not_found' => 'Not found',
            'not_found_in_trash' => 'Not found in bin',
            'parent_item_colon' => '',
            'menu_name' => 'Review',
        ],
        'description' => '',
        'public' => true,
        'show_in_menu' => null,
        'show_in_rest' => null,
        'rest_base' => null,
        'menu_position' => null,
        'menu_icon' => null,
        'hierarchical' => false,
        'supports' => ['title', 'editor'],
        'taxonomies' => [],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

});
