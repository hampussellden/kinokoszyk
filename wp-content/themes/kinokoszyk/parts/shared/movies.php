<?php
$image = get_field('image');
$srcset = wp_get_attachment_image_srcset($image['ID']);
?>

<article class="relative flex flex-col gap-[18px] border-b last:border-none pb-[31px] pt-[48px] h-auto w-auto sm:flex-row sm:justify-center sm:items-center sm:gap-11 sm:py-[60px] lg:py-80px]">
    <div class="sm:flex sm:flex-col sm:h-[391px] sm:justify-center sm:gap-10">
        <div class="flex flex-col gap-4 sm:gap-5">
            <h4 class="font-display text-3xl sm:text-4xl lg:text-6xl"><?= the_title(); ?></h4>
            <p class="font-body sm:text-lg lg:text-xl line-clamp-4 max-w-[70ch]"><?php the_field('description'); ?></p>
        </div>
        <a href="<?php the_permalink(); ?>">
            <?php get_template_part('parts/shared/seemore-btn') ?>
        </a>
    </div>
    <img class="sm:min-w-[52%] object-cover object-top" srcset="<?= $srcset; ?>" sizes="50vw" />
</article>