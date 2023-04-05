<?php
$image = get_field('image');
?>
<div class="flex flex-col max-h-64 sm:max-h-[692px] lg:max-h-752 max-w-1/2">
    <div class="object-cover overflow-hidden">
        <img src="<?php $image['url']; ?>" alt="">
    </div>
    <div class="flex flex-row justify-center items-center py-2 bg-kinogrey rounded-b-sm">
        <h4 class="font-display text-black sm:text-4xl"><?php the_field('subject'); ?></h4>
    </div>
</div>