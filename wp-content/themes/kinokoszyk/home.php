<?php get_header(); ?>

<?php
$args = array(
    "posts_per_page" => 1,
    "orderby" => "date",
    "order" => "DESC"
);

$query = new WP_Query($args);
?>

<main class="w-full">
    <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    <h2 class="font-display text-5xl ml-5 mt-8 mb-8 lg:text-8xl lg:ml-10 lg:my-20">News</h2>
    <?php if ($query->have_posts()) : ?>
        <article class="bg-kinowhite mb-16 hidden lg:block relative">
            <?php if (has_post_thumbnail()) : ?>
                <img class="w-full max-h-[341px] object-cover" src="<?= esc_url(get_the_post_thumbnail_url(null, 'large')); ?>" alt="<?= esc_attr(get_the_title()); ?>">
                <p class="absolute left-4 top-4">Latest news</p>
            <?php endif; ?>
            <div class="text-kinodeepblack ml-10 mr-10 mt-10 pb-12">
                <h3 class="font-display text-8xl text-kinodeepblack mb-5 mt-4"><?= the_title(); ?></h3>
                <p><?= wp_trim_words(get_the_excerpt(), 20, "......"); ?></p>
                <a class="text-kinored font-bold" href="<?= the_permalink(); ?>">Read More ></a>
            </div>
        </article>
    <?php endif; ?>

    <section class="flex flex-col justify-center lg:flex-row lg:flex-wrap gap-6 px-5 lg:px-10">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="flex flex-col bg-kinowhite break-words lg:w-[300px]">
                    <?php if (has_post_thumbnail()) : ?>
                        <img class="w-full h-auto object-cover" src="<?= esc_url(get_the_post_thumbnail_url(null, 'large')); ?>" alt="<?= esc_attr(get_the_title()); ?>">
                    <?php else : ?>
                        <img class="w-full max-h-[341px] object-cover" src="<?= get_template_directory_uri(); ?>/Vector.svg" alt="Placeholder image.">
                    <?php endif; ?>
                    <div class="text-kinodeepblack pr-4 pl-4 pb-10">
                        <h3 class="font-display text-2xl text-kinodeepblack mt-4 lg:text-4xl"><?= the_title(); ?></h3>
                        <p><?= wp_trim_words(get_the_excerpt(), 20, "......"); ?></p>
                        <div class="mt-6">
                            <a class="text-kinored font-bold" href="<?= the_permalink(); ?>">Read More ></a>
                        </div>
                    </div>
                </article>
        <?php endwhile;
        endif;
        ?>
    </section>
    <div class="flex justify-center gap-2 mt-10">
        <?php

        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

        echo paginate_links(array(
            'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
            'format' => '?paged=%#%',
            'current' => $paged,
            'prev_next' => true,
            'prev_text' => __('Previous'),
            'next_text' => __('Next'),
            'before_page_number' => '<span class="underline">',
            'after_page_number' => '</span>',
        ));
        ?>
    </div>
</main>

<?php
get_footer();
?>