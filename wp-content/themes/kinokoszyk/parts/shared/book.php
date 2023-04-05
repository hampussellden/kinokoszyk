<?php
$image = get_field('image');
?>

<article class="pt-12 sm:pt-20 lg:p32 pb-12 sm:pb-32">
    <h2 class="font-display text-5xl sm:text-8xl lg:text-9xl pb-8 "> <?php the_title(); ?></h2>
    <div class="flex flex-col gap-x-11 lg:gap-x-20 gap-y-8 sm:flex-row">
        <div class="sm:max-w-1/2"><?php the_content(); ?></div>
        <div class="sm:max-w-1/2">
            <img class="object-contain" src="<?= $image['url']; ?>" alt="">
        </div>
    </div>
</article>