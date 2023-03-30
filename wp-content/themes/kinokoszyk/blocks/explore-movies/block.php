<?php
$image = get_field('image');
?>
<div class="relative flex flex-col gap-[16px] border-b pb-[31px] h-auto w-auto">
    <h4 class="text-3xl">Explore Movies</h4>
    <p><?php the_field('description'); ?></p>
    <div class="w-auto">
        <img class="w-[91.64%]" src="<?= $image['url']; ?>" alt="<?= $image['alt'] ?>">
        <button class="absolute flex flex-row justify-center items-center gap-[8px] p-[12px] bg-kinored text-kinowhite bottom-[31px] right-0 text-xl md:text-4xl md:pl-[32px] md:pr-[32px] md:pt-[13.9px] md:pb-[13.9px]">Movies
            <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.9981 7.99966L8.99931 7.99847L7.63578 6.65891L7.63456 6.6601L1.36422 0.5L0.000689844 1.83956L6.27103 7.99966L0 14.1604L1.36353 15.5L7.63456 9.33922L7.63647 9.34109L9 8.00153L8.9981 7.99966Z" fill="white" />
            </svg>
        </button>
    </div>
</div>