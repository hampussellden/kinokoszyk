<?php
$image = get_field('image');
$portrait = get_field('portrait');
$srcset = wp_get_attachment_image_srcset($image['ID']);
$alt = $image['alt'];
if ($portrait) {
    $srcsetPortrait = wp_get_attachment_image_srcset($portrait['ID']);
    $altPortrait = $portrait['alt'];
}
?>


<article class="pt-8 pb-12">
    <h2 class="font-display pb-6 sm:pb-8 lg:pb-10 text-5xl sm:text-8xl lg:9xl"><?php the_title() ?></h2>
    <div class="flex flex-col pb-2 sm:flex-row gap-y-8 gap-x-10 lg:gap-x-20">
        <div class="sm:max-w-1/2 flex flex-col justify-between">
            <p class="pb-4 max-w-[70ch]"><?php the_field('description'); ?></p>
            <?php if (get_field('trailer_url')) : ?>
                <a class="" href="<?= the_field('trailer_url') ?>">
                    <?php get_template_part('parts/shared/trailer-btn'); ?>
                </a>
            <?php endif ?>
        </div>
        <div class="sm:max-w-1/2">
            <?php if (get_field('portrait')) : ?>
                <img class="sm:min-w-[50%] object-cover" srcset="<?= $srcsetPortrait; ?>" alt="<?= $altPortrait; ?>" sizes="100vw">
            <?php else : ?>
                <img class="sm:min-w-[50%] object-cover" srcset="<?= $srcset; ?>" alt="<?= $alt; ?>" sizes="100vw">
            <?php endif ?>
        </div>
        <?php if (get_field('trailer_url')) : ?>
            <a class="sm:hidden self-end" href="<?= the_field('trailer_url') ?>">
                <?php get_template_part('parts/shared/trailer-btn'); ?>
            </a>
        <?php endif ?>
    </div>
</article>