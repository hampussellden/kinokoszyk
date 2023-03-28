<?php
//Tailwind 
function enqueue_scripts()
{
    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), null, false);
    // Load tailwind.config.js after tailwind has been loaded
    wp_enqueue_script('tailwind-config', get_template_directory_uri() . '/tailwind.config.js', array('tailwind'), null, false);
    // wp_enqueue_script('script.js', get_stylesheet_directory_uri() . '/js/script.js');
    //Register theme support
}
function javascript_scripts()
{
    wp_enqueue_script('script.js', (get_template_directory_uri() . '/js/script.js'), true, false);
}

add_action('enqueue_block_editor_assets', 'enqueue_scripts');
add_action('wp_enqueue_scripts', 'enqueue_scripts');

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
});
//register theme menus
function register_theme_menus()
{
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu'),
        'footer-menu' => __('Footer Menu'),
    ));
}
add_action('init', 'register_theme_menus');

add_action(
    'init',
    function () {
        register_block_type(__DIR__ . '/blocks/collaborators');
        register_block_type(__DIR__ . '/blocks/explore-books');
        register_block_type(__DIR__ . '/blocks/explore-movies');
        register_block_type(__DIR__ . '/blocks/explore-photos');
        register_block_type(__DIR__ . '/blocks/lets-talk');
    }
);

add_action(
    'init',
    function () {
        register_post_type('photo', array(
            'labels' => array(
                'name' => __('Photo')
            ),
            'public' => true,
            'has_archive' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_icon' => 'dashicons-camera'
        ));
        register_post_type('book', array(
            'labels' => array(
                'name' => __('Book')
            ),
            'public' => true,
            'has_archive' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_icon' => 'dashicons-book'
        ));
        register_post_type('movie', array(
            'labels' => array(
                'name' => __('Movie')
            ),
            'public' => true,
            'has_archive' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_icon' => 'dashicons-video-alt'
        ));
    }
);

function print_a($data)
{
?>
< pre class="block p-6 m-6 border border-brown rounded-xl text-xs overflow-hidden">
    < code> <?php print_r($data); ?> < /code>
            </pre>
            <?php
        }

//example of creating a new post type
/* 
add_action('init', function() {
    register_post_type('movie', array(
        'labels' => array(
            'name' => __('Movie'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-video-alt',
    ));
}); 
*/