<?php get_header(); ?>

<?php
$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

$thumbNailImage = get_field('news_thumbnail_image');
if ($thumbNailImage) {
    $thumbNailImageID = $thumbNailImage['ID'];
    $thumbNailSrcset = wp_get_attachment_image_srcset($thumbNailImageID);
    $thumbNailAlt = $thumbNailImage['alt'];
}

$image = get_field('news_image');
if ($image) {
    $srcset = wp_get_attachment_image_srcset($image['ID']);
    $alt = $image['alt'];
}

$args = array(
    "posts_per_page" => 1,
    "orderby" => "date",
    "order" => "DESC",
    "paged" => get_query_var('paged') ?: 1
);
$firstPost = new WP_Query($args);
?>

<main class="w-full">
    <div class="mx-5 sm:mx-7 lg:mx-[80px]"><?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?></div>
    <h2 class="font-display text-5xl ml-5 mt-8 mb-8 lg:text-8xl lg:ml-[80px] lg:my-20">News</h2>
    <?php if ($args['paged'] == 1) : ?>
        <?php if ($firstPost->have_posts()) : ?>
            <article class="bg-kinowhite mb-16 hidden lg:block relative h-auto">
                <?php if ($thumbNailImage) : ?>
                    <div>
                        <img class="w-full max-h-[341px] object-cover" alt="<?= $thumbNailAlt; ?>" srcset="<?= $thumbNailSrcset; ?>" sizes="100vw" loading="lazy" />
                    </div>
                    <p class="absolute left-4 top-4">Latest news</p>
                <?php endif; ?>
                <div class="text-kinodeepblack ml-10 mr-10 mt-10 pb-12">
                    <a href="<?= the_permalink(); ?>">
                        <h3 class="font-display text-8xl text-kinodeepblack mb-5 mt-4"><?= the_title(); ?></h3>
                    </a>
                    <?php if (get_field('news_description')) : ?>
                        <p class="mb-5"><?= substr(get_field('news_description'), 0, 132) . '...' ?></p>
                    <?php endif; ?>
                    <a class="text-kinored font-bold" href="<?= the_permalink(); ?>">Read More ></a>
                </div>
            </article>
        <?php endif; ?>
    <?php endif; ?>

    <section class="flex flex-col justify-center lg:grid grid-cols-3 gap-6 sm:gap-5 px-5 lg:px-10">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php
                $thumbNailImage = get_field('news_thumbnail_image');
                if ($thumbNailImage) {
                    $thumbNailImageID = $thumbNailImage['ID'];
                    $thumbNailSrcset = wp_get_attachment_image_srcset($thumbNailImageID);
                    $thumbNailAlt = $thumbNailImage['alt'];
                }
                ?>
                <article class="flex flex-col bg-kinowhite break-words w-full justify-self-center">
                    <?php if ($thumbNailImage) : ?>
                        <div>
                            <img class="max-h-[280px] w-full object-cover" alt="<?= $thumbNailAlt; ?>" srcset="<?= $thumbNailSrcset; ?>" sizes="100vw" loading="lazy" />
                        </div>
                    <?php else : ?>
                        <div>
                            <img class="max-h-[280px] w-full object-cover" src="<?= get_template_directory_uri(); ?>/Vector-black.svg" alt="Placeholder image.">
                        </div>
                    <?php endif; ?>
                    <div class="flex flex-col text-kinodeepblack pr-4 pl-4 pb-10 h-full">
                        <a href="<?= the_permalink(); ?>">
                            <h3 class="font-display text-2xl text-kinodeepblack mt-4 mb-5 lg:mt-5 lg:text-4xl"><?= the_title(); ?></h3>
                        </a>
                        <?php if (get_field('news_description')) : ?>
                            <p class="mb-5"><?= substr(get_field('news_description'), 0, 132) . '...' ?></p>
                        <?php endif; ?>
                        <a class="mt-auto" href="<?= the_permalink(); ?>">
                            <p class="text-kinored font-bold">Read More >
                            </p>
                        </a>
                    </div>
                </article>
        <?php endwhile;
        endif;
        ?>
    </section>
    <div class="flex justify-center gap-2 mt-10 mb-10 text-xl">
        <?php

        $currentPage = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $currentPage,
            'prev_text' => __('<span class="font-semibold">Prev</span>'),
            'next_text' => __('<span class="font-semibold">Next</span>'),
        ));
        ?>
    </div>
</main>

<?php
get_footer();
?>