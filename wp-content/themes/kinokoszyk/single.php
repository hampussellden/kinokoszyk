<?php get_header(); ?>

<?php
$image = get_field('news_image');

$thumbNailImage = get_field('news_thumbnail_image');
if ($thumbNailImage) {
    $thumbNailImageID = $thumbNailImage['ID'];
    $thumbNailSrcset = wp_get_attachment_image_srcset($thumbNailImageID);
    $thumbNailAlt = $thumbNailImage['alt'];
}

if ($image) {
    $srcset = wp_get_attachment_image_srcset($image['ID']);
    $alt = $image['alt'];
} ?>

<main class="mx-5 sm:mx-7 lg:mx-[60px]">
    <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
            <article class="flex flex-col gap-8 justify-center mb-10">
                <h2 class="font-display text-5xl sm:text-8xl lg:text-9xl lg:pb-10 pt-8 sm:pt-20"><?= the_title(); ?></h2>
                <?php if (the_field('news_description')) : ?>
                    <div class="flex flex-col gap-4"><?php the_field('news_description'); ?></div>
                <?php endif; ?>
                <?php if ($image) : ?>
                    <div class="max-w-[350px] lg:max-w-[450px]">
                        <img alt="<?= $alt; ?>" srcset="<?= $srcset; ?>" sizes="100vw" loading="lazy" />
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
            </article>
        <?php endif; ?>
</main>

<?php get_footer(); ?>