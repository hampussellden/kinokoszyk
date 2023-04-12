<?php
//Tailwind 
function enqueue_scripts()
{
    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), null, false);
    // Load tailwind.config.js after tailwind has been loaded
    wp_enqueue_script('tailwind-config', get_template_directory_uri() . '/tailwind.config.js', array('tailwind'), null, false);



    //Register theme support
}

add_action('enqueue_block_editor_assets', 'enqueue_scripts');
add_action('wp_enqueue_scripts', 'enqueue_scripts');


function kinoK_enqueue_custom_js()
{
    wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/scripts/scripts.js', null, null, true);
    wp_enqueue_script('photos', get_stylesheet_directory_uri() . '/scripts/jh-photos.js', null, null, true);
}

add_action('wp_enqueue_scripts', 'kinoK_enqueue_custom_js');





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
        'secondary-menu' => __('Secondary Menu'),
        'footer-links' => __('Footer Links'),
        'footer-contacts' => __('Footer Contacts'),
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
        register_block_type(__DIR__ . '/blocks/about');
        register_block_type(__DIR__ . '/blocks/prizes-awards');
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
    <pre class="block p-6 m-6 border border-brown rounded-xl text-xs overflow-hidden">
    <code> <?php print_r($data); ?> </code>
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

function the_breadcrumb()
{
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = '<span class="font-body font-light sm:text-lg lg:text-xl"> / </span>'; // delimiter between crumbs
    $home = 'Home'; // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<span class="current font-body font-light sm:text-lg lg:text-xl">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb

    global $post;
    $homeLink = get_bloginfo('url');
    if (is_home() || is_front_page()) {
        if ($showOnHome == 1) {
            echo '<div id="crumbs"><a class="font-body font-light sm:text-lg lg:text-xl " href="' . $homeLink . '">' . $home . '</a></div>';
        }
    } else {
        echo '<div class="flex flex-row gap-x-2.5 lg:gap-x-3 self-start py-4 px-5 sm:py-5 sm:px-10 lg:py-10 px-20" id="crumbs"><a class="font-body font-light sm:text-lg lg:text-xl " href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
        if (is_category()) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                echo get_category_parents($thisCat->parent, true, ' ' . $delimiter . ' ');
            }
            echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
        } elseif (is_search()) {
            echo $before . 'Search results for "' . get_search_query() . '"' . $after;
        } elseif (is_day()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a class="font-body font-light sm:text-lg lg:text-xl" href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
                if ($showCurrent == 1) {
                    echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
                }
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, true, ' ' . $delimiter . ' ');
                if ($showCurrent == 0) {
                    $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                }
                echo $cats;
                if ($showCurrent == 1) {
                    echo $before . get_the_title() . $after;
                }
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif (is_attachment()) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo get_category_parents($cat, true, ' ' . $delimiter . ' ');
            echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_page() && !$post->post_parent) {
            if ($showCurrent == 1) {
                echo $before . get_the_title() . $after;
            }
        } elseif (is_page() && $post->post_parent) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo $breadcrumbs[$i];
                if ($i != count($breadcrumbs) - 1) {
                    echo ' ' . $delimiter . ' ';
                }
            }
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_tag()) {
            echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . 'Articles posted by ' . $userdata->display_name . $after;
        } elseif (is_404()) {
            echo $before . 'Error 404' . $after;
        }
        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ' (';
            }
            echo __('Page') . ' ' . get_query_var('paged');
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ')';
            }
        }
        echo '</div>';
    }
}
