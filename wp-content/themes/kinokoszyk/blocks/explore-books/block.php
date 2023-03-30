<?php
$image = get_field('image');
?>
<article class="relative flex flex-col gap-[18px] border-b pb-[31px] pt-[48px] h-auto w-auto md:flex-row-reverse md:justify-center md md:items-center md:gap-11 md:pb-[60px] md:pt-[60px] lg:pb-[89px] lg:pt-[80px]">
    <div class="md:flex md:flex-col md:h-[391px] md:w-full md:justify-center md:gap-10">
        <div class="flex flex-col gap-4 md:gap-5">
            <h4 class="font-display text-3xl">Explore Books</h4>
            <p><?php the_field('description'); ?></p>
        </div>
        <button class="absolute flex flex-row justify-center items-center gap-[8px] p-[12px] bg-kinored text-kinowhite bottom-[31px] right-0 text-xl w-fit h-fit md:static md:pl-[32px] md:pr-[32px] md:pt-[13.9px] md:pb-[13.9px] md:gap-[24px] md:text-[24px]">Books
            <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.9981 7.99966L8.99931 7.99847L7.63578 6.65891L7.63456 6.6601L1.36422 0.5L0.000689844 1.83956L6.27103 7.99966L0 14.1604L1.36353 15.5L7.63456 9.33922L7.63647 9.34109L9 8.00153L8.9981 7.99966Z" fill="white" />
            </svg>
        </button>
    </div>
    <img class="w-[91.64%] md:max-h-[350px] md:max-w-[500px]" src="<?= $image['url']; ?>" alt="<?= $image['alt'] ?>">
</article>