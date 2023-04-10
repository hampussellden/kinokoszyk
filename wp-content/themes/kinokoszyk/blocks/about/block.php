<?php
$image = get_field('image_about');
?>
<article
    class="relative flex flex-col gap-[18px] border-b pb-[31px] pt-[48px] h-auto w-full lg:flex-row :justify-center  :items-center lg:gap-11 lg:border-t lg:pb-[60px] lg:pt-[60px] lg:pb-[89px] lg:pt-[80px]">
    <div class="lg:flex lg:flex-col lg:h-auto lg:w-full lg:justify-center lg:gap-10">
        <div class="flex flex-col gap-4 lg:gap-5">
            <!-- <h4 class="font-display text-3xl">About us</h4> -->
            <p class="line-clamp-4"><?= the_field('description'); ?></p>
        </div>

    </div>
    <img class="w-[91.64%] lg:max-h-[350px] lg:max-w-[500px]" src="<?= $image['url']; ?>" alt="<?= $image['alt'] ?>">
</article>