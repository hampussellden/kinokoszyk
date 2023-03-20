<?php
// Load Tailwind from CDN
// https://tailwindcss.com/docs/installation/play-cdn
function enqueue_scripts()
{
    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), null, false);
    // Load tailwind.config.js after tailwind has been loaded
    wp_enqueue_script('tailwind-config', get_template_directory_uri() . '/tailwind.config.js', array('tailwind'), null, false);
}
add_action('enqueue_block_editor_assets', 'enqueue_scripts');
add_action('wp_enqueue_scripts', 'enqueue_scripts');

// Register theme support
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
});

// Register theme menu(s)
// https://developer.wordpress.org/themes/functionality/navigation-menus/

add_action('init', function () {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu'),
        'footer-menu' => __('Footer Menu'),
        'secondary-menu' => __('Secondary Menu')
    ));
});

add_action(
    'init',
    function () {
        register_block_type(__DIR__ . '/blocks/hero');
        register_block_type(__DIR__ . '/blocks/vendors');
    }
);

add_action(
    'init',
    function () {
        register_post_type('ice-cream', array(
            'labels' => array(
                'name' => __('Ice Cream')
            ),
            'public' => true,
            'has_archive' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_icon' => 'dashicons-thumbs-down'
        ));
    }
);

// Print array or object in a pre tag
function print_a($data)
{
?>
    <pre class="block p-6 m-6 border border-brown rounded-xl text-xs overflow-hidden"><code><?php print_r($data); ?></code></pre>
<?php
}

/*
use the dashicons-thumbs-down as icon
have has_archive set to true
have public set to true
*/