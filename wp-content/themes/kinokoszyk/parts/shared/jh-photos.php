<?php $image = get_field('image');
$srcset = wp_get_attachment_image_srcset($image['ID']);
$alt = $image['alt'];
?>
<div class="flex justify-center items-center max-w-1/2 lg:max-w-1/3 object-contain overflow-hidden px-2 pt-4 sm:pt-5 sm:px-2.5 lg:pt-10 lg:px-5">
    <img class="aspect-auto object-contain" alt="<?= $alt; ?>" srcset="<?= $srcset; ?>" sizes="100vw" loading="lazy" />
</div>