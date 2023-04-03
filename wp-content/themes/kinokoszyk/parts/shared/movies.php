<article class="relative flex flex-col gap-[18px] border-b pb-[31px] pt-[48px] h-auto w-auto sm:flex-row sm:justify-center sm:items-center sm:gap-11 sm:border-t sm:py-[60px] lg:py-80px]">
    <div class="sm:flex sm:flex-col sm:h-[391px] sm:justify-center sm:gap-10">
        <div class="flex flex-col gap-4 sm:gap-5">
            <h4 class="font-display text-3xl sm:text-4xl lg:text-6xl"><?= the_title(); ?></h4>
            <p class="font-body sm:text-lg lg:text-xl line-clamp-4"><?php the_field('description'); ?></p>
        </div>
        <a href="<?php the_permalink(); ?>">
            <button class="absolute flex flex-row justify-center items-center gap-[8px] p-[12px] bg-kinored text-kinowhite bottom-[31px] right-0 text-xl w-fit h-fit sm:static sm:pl-[32px] sm:pr-[32px] sm:pt-[13.9px] sm:pb-[13.9px] sm:gap-[24px] sm:text-[24px] cursor-pointer">See more
                <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.9981 7.99966L8.99931 7.99847L7.63578 6.65891L7.63456 6.6601L1.36422 0.5L0.000689844 1.83956L6.27103 7.99966L0 14.1604L1.36353 15.5L7.63456 9.33922L7.63647 9.34109L9 8.00153L8.9981 7.99966Z" fill="white" />
                </svg>
            </button>
        </a>
    </div>
    <img class="w-[91.64%] max-h-[290px] sm:max-h-[350px] sm:min-w-[52%] object-cover object-top" src="<?php the_field('image'); ?>" alt="">
</article>