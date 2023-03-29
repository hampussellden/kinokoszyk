<?php
$image = get_field('image');
?>
<div class="absolute flex flex-col gap-[16px] border-b-4 pb-[31px]">
    <h4 class="text-3xl">Explore Books</h4>
    <p><?php the_field('description'); ?></p>
    <img src="<?= $image['url']; ?>" alt="<?= $image['alt'] ?>">
    <button class="w-[138px] h-[48px] bg-red-500 absolute bottom-[31px] right-0">Books</button>
</div>