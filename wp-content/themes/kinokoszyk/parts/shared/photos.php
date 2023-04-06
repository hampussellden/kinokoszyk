<?php
$image = get_field('image');
$srcset = wp_get_attachment_image_srcset($image['ID']);
?>
<div class="flex flex-col max-h-64 sm:max-h-[692px] lg:max-h-752 max-w-1/2">
    <div class="object-cover overflow-hidden">
        <img srcset="<?= $srcset; ?>" sizes="33vw" />
    </div>
    <div class="flex flex-row justify-center items-center py-2 bg-kinogrey rounded-b-sm">
        <h4 class="font-display text-black sm:text-4xl"><?php the_field('subject'); ?></h4>
    </div>
</div>