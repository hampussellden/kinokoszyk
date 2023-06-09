<?php
$image = get_field('image');
$srcset = wp_get_attachment_image_srcset($image['ID']);
$alt = $image['alt'];
?>

<a href="<?= the_permalink(); ?>" class="flex flex-col justify-start items-start py-8 border-b-2 border-solid border-kinowhite sm:max-w-[300px] lg:max-w-[400px] px-1.5 sm:px-3 lg:px-5">
    <?php if (get_field('image')) : ?>
        <img class="object-cover aspect-[2/2.5]" alt="<?= $alt; ?>" srcset="<?= $srcset; ?>" sizes="50vw" loading="lazy" />
    <?php endif; ?>
    <div class="flex flex-col gap-1">
        <h3 class="font-display pt-2 text-2xl sm:text-4xl lg:text-5xl"><?= the_title(); ?></h3>
        <?php if (get_field('publisher')) : ?>
            <p class="font-body font-light text-base sm:text-lg lg:text-xl "><?php the_field('publisher'); ?></p>
        <?php endif; ?>
        <?php if (get_field('isb')) : ?>
            <p class="font-body font-light text-base sm:text-lg lg:text-xl"><?php the_field('isb'); ?></p>
        <?php endif; ?>
    </div>
</a>