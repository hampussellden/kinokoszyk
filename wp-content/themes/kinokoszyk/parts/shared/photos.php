<?php
$image = get_field('image');
$srcset = wp_get_attachment_image_srcset($image['ID']);
?>
<div class="flex flex-col max-w-1/2 p-2 sm:p.2.5 lg:p-5">
    <div class="overflow-hidden">
        <img class="object-contain" srcset="<?= $srcset; ?>" sizes="100vw" loading="lazy" />
    </div>
    <div class="flex flex-row py-2 bg-kinogrey rounded-b-sm">
        <h4 class="font-display pl-2 text-black sm:text-4xl"><?php the_field('subject'); ?></h4>
    </div>
</div>