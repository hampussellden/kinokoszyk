<?php
$image = get_field('image');
?>
<div class="relative flex flex-col gap-[16px] border-b-4 pb-[31px]">
    <h4 class="text-3xl">Explore Photographs</h4>
    <p><?php the_field('description'); ?></p>
    <img src="<?= $image['url']; ?>" alt="<?= $image['alt'] ?>">
    <button class="absolute w-[138px] h-[48px] bg-kinored text-kinowhite bottom-[31px] right-0">Photographs</button>
</div>