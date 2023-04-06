<?php
$image = get_field('image');
?>
<article class="relative flex flex-col gap-[18px] border-b pb-[31px] pt-[48px] h-auto w-auto lg:flex-row :justify-center  :items-center lg:gap-11 lg:border-t lg:pb-[60px] lg:pt-[60px] lg:pb-[89px] lg:pt-[80px]">
    <div class="lg:flex lg:flex-col lg:h-[391px] lg:w-full lg:justify-center lg:gap-10">
        <div class="flex flex-col gap-4 lg:gap-5">
            <h4 class="font-display text-3xl">Explore Movies</h4>
            <p class="line-clamp-4"><?php the_field('description'); ?></p>
        </div>
        <button class="absolute flex flex-row justify-center items-center gap-[8px] p-[12px] bg-kinored text-kinowhite bottom-[31px] right-0 text-xl w-fit h-fit lg:static lg:pl-[32px] lg:pr-[32px] lg:pt-[13.9px] lg:pb-[13.9px] lg:gap-[24px] lg:text-[24px]">Movies
            <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.9981 7.99966L8.99931 7.99847L7.63578 6.65891L7.63456 6.6601L1.36422 0.5L0.000689844 1.83956L6.27103 7.99966L0 14.1604L1.36353 15.5L7.63456 9.33922L7.63647 9.34109L9 8.00153L8.9981 7.99966Z" fill="white" />
            </svg>
        </button>
    </div>
    <img class="w-[91.64%] lg:max-h-[350px] lg:max-w-[500px]" src="<?= $image['url']; ?>" alt="<?= $image['alt'] ?>">
</article>