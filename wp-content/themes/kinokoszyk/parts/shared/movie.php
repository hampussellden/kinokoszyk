<?php
$image = get_field('image');
$portrait = get_field('portrait');
$srcset = wp_get_attachment_image_srcset($image['ID']);
$srcsetPortrait = wp_get_attachment_image_srcset($portrait['ID']);
$alt = $image['alt'];
$altPortrait = $portrait['alt'];
?>


<article class="py-8 ">
    <h2 class="font-display pb-6 sm:pb-8 lg:pb-10 text-5xl sm:text-8xl lg:9xl"><?php the_title() ?></h2>
    <div class="flex flex-col pb-2 sm:flex-row gap-y-8 gap-x-10 lg:gap-x-20">
        <div class="sm:max-w-1/2">
            <p class="pb-4"><?php the_field('description'); ?></p>
            <a href="">
                <?php get_template_part('parts/shared/trailer-btn'); ?>
            </a>
        </div>
        <div>
            <?php if (get_field('portrait')) : ?>
                <img class="sm:min-w-[50%] object-cover" srcset="<?= $srcsetPortrait; ?>" alt="<?= $altPortrait; ?>" sizes="100vw">
            <?php else : ?>
                <img class="sm:min-w-[50%] object-cover" srcset="<?= $srcset; ?>" alt="<?= $alt; ?>" sizes="100vw">
            <?php endif ?>
            <a class="sm:hidden" href="">
                <?php get_template_part('trailer-btn'); ?>
            </a>
        </div>
    </div>
</article>