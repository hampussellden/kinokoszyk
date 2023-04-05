<?php
$image = get_field('image');
?>


<article class="py-8 ">
    <h2 class="font-display pb-6 sm:pb-8 lg:pb-10 text-5xl sm:text-8xl lg:9xl"><?php the_title() ?></h2>
    <div class="flex flex-col pb-2 sm:flex-row gap-y-8 gap-x-10 lg:gap-x-20">
        <div>
            <p class=""><?php the_field('description'); ?></p>
            <a href="">
                <?php get_template_part('parts/shared/trailer-btn'); ?>
            </a>
        </div>
        <img class="sm:w-[50%] object-cover" src="<?= $image['url']; ?>" alt="">
        <a class="sm:hidden" href="">
            <button class="absolute flex flex-row justify-center items-center gap-[8px] p-[12px] bg-kinored text-kinowhite bottom-[31px] right-0 text-xl w-fit h-fit sm:static sm:pl-[32px] sm:pr-[32px] sm:pt-[13.9px] sm:pb-[13.9px] sm:gap-[24px] sm:text-[24px] cursor-pointer">Trailer
                <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.9981 7.99966L8.99931 7.99847L7.63578 6.65891L7.63456 6.6601L1.36422 0.5L0.000689844 1.83956L6.27103 7.99966L0 14.1604L1.36353 15.5L7.63456 9.33922L7.63647 9.34109L9 8.00153L8.9981 7.99966Z" fill="white" />
                </svg>
            </button>
        </a>
    </div>
</article>