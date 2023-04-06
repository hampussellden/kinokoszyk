<?php
$image = get_field('image');
$srcset = wp_get_attachment_image_srcset($image['ID']);
$image = $image['alt'];
?>

<article class="py-12 sm:py-20 lg:py-32">
    <h2 class="font-display text-5xl sm:text-8xl lg:text-9xl pb-8 "> <?php the_title(); ?></h2>
    <div class="flex flex-col gap-x-11 lg:gap-x-20 gap-y-8 sm:flex-row">
        <div class="sm:max-w-1/2 sm:text-lg lg:text-xl"><?php the_content(); ?></div>
        <div class="sm:max-w-1/2">
            <img class="" alt="<?= $alt; ?>" srcset="<?= $srcset; ?>" sizes="33vw" />
        </div>
    </div>
</article>