<?php
//maybe tailwind?

//Register theme support
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

function print_a($data)
{
?>
    <pre>
        <code><?php print_r($data) ?></code>
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