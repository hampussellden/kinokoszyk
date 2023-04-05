<?php
$image = get_field('image');
?>

<article class="relative flex flex-col gap-[18px] border-b pb-[31px] pt-[48px] h-auto w-auto sm:flex-row sm:justify-center sm:items-center sm:gap-11 sm:border-t sm:py-[60px] lg:py-80px]">
    <div class="sm:flex sm:flex-col sm:h-[391px] sm:justify-center sm:gap-10">
        <div class="flex flex-col gap-4 sm:gap-5">
            <h4 class="font-display text-3xl sm:text-4xl lg:text-6xl"><?= the_title(); ?></h4>
            <p class="font-body sm:text-lg lg:text-xl line-clamp-4"><?php the_field('description'); ?></p>
        </div>
        <a href="<?php the_permalink(); ?>">
            <?php get_template_part('parts/shared/seemore-btn') ?>
        </a>
    </div>
    <img class="w-[91.64%] sm:min-w-[52%] object-cover object-top" src="<?= $image['url']; ?>" alt="">
</article>