<?php /* Template Name: Example Template */ ?>

<?php get_header('jh'); ?>




<?php $imageAbout = get_field('about_image');
$srcsetAbout = wp_get_attachment_image_srcset($imageAbout['ID']);
$altAbout = $imageAbout['alt'];  ?>

<?php $imageBooks = get_field('explore_books_image');
$srcsetBooks = wp_get_attachment_image_srcset($imageBooks['ID']);
$altBooks = $imageBooks['alt'];  ?>

<?php $imagePhotographs = get_field('explore_photographs_image');
$srcsetPhotographs = wp_get_attachment_image_srcset($imagePhotographs['ID']);
$altPhotographs = $imagePhotographs['alt'];  ?>



<?php





$argsHero = array(
    'post_type' => "page",
    'title' => "jh hero",
    'posts_per_page' => 1,
    'order' => 'DESC',
    'orderby' => 'date',
);



$queryHero = new WP_Query($argsHero);
if ($queryHero->have_posts()) : ?>
    <div class="relative inline-block flex flex-col items-start max-h-screen">
        <?php while ($queryHero->have_posts()) : $queryHero->the_post(); ?>
            <div class="blockmin-h-[55vw] w-full "><?= the_content(); ?></div>
        <?php endwhile; ?>

        <h2 class="absolute font-display 
    bottom-0 sm:bottom-24 md:bottom-28 lg:bottom-36 xl:bottom-48
    text-6xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-8xl
    sm:tracking-widest
    sm:self-center xl:pl-5
    pl-4 sm:pl-0
    ">JOANNA HELANDER</h2>
        <h3 class="absolute bottom-0 self-center m-0
        sm:text-[112px] md:text-[136px] lg:text-[180px] xl:text-[248px]
        sm:leading-headingOne md:leading-headingTwo 
        lg:leading-headingThree xl:leading-headingFour
        tracking-tightest font-normal font-display 
        hidden sm:inline-block">
            KINO<span class="sm:hidden"> </span>KOSZYK</h3>

    </div>

<?php endif; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <main class="mx-3.5 sm:mx-7 lg:mx-[80px]">
            <div class="w-full flex flex-row ">
                <h3 class=" text-5xl sm:text-[96px] lg:text-[128px] font-display tracking-tighter font-normal 
        pt-12 sm:pt-20 lg:pt-32 
        pb-6 sm:pb-8 lg:pb-10
        sm:leading-headingFive lg:leading-headingSix
        ">
                    <?= the_field("about_title"); ?>
                </h3>
            </div>
            <div class="w-full flex flex-row justify-around gap-[44px]">
                <p class="max-w-[70ch] text-base lg:text-xl sm:text-lg ">
                    <?= the_field("about_description"); ?>
                </p>
                <img class="max-w-1/2 object-contain hidden self-start sm:inline-block" alt="<?= $altAbout; ?>" srcset="<?= $srcsetAbout; ?>" sizes="50vw" loading="lazy" />
            </div>

            <div>
                <h3 class="max-w-[12ch] sm:max-w-[70ch]
         text-5xl sm:text-[96px] lg:text-[128px] font-display tracking-tighter font-normal
        sm:leading-headingFive lg:leading-headingSix
        pt-20 md:pt-32
        pb-7 sm:pb-10 lg:pb-20">
                    <?= the_field("prizes_and_awards_title"); ?>
                </h3>
                <p class="max-w-[70ch] text-base lg:text-xl sm:text-lg ">
                    <?= the_field("prizes_and_awards_description"); ?>
                </p>

            </div>

            <section class="pt-[110px] lg:pt-[168px]">
                <article class="relative flex flex-col gap-[18px] border-b pb-[31px] pt-[48px] h-auto w-auto lg:flex-row lg:justify-center lg:items-center lg:gap-11 lg:border-t lg:pt-[60px] lg:pb-[89px] lg:pt-[80px]">
                    <div class="lg:flex lg:flex-col lg:h-[391px] lg:w-full lg:justify-center lg:gap-10">
                        <div class="flex flex-col gap-4 lg:gap-5">
                            <h3 class="font-display text-3xl"><?= the_field("explore_books_title") ?></h3>
                            <p class="max-w-[70ch]"><?php the_field("explore_books_description"); ?></p>
                        </div>
                        <a href="book">
                            <button class="absolute flex flex-row justify-center items-center gap-[8px] p-[12px] bg-kinored text-kinowhite bottom-[31px] right-0 text-xl w-fit h-fit lg:static lg:pl-[32px] lg:pr-[32px] lg:pt-[13.9px] lg:pb-[13.9px] lg:gap-[24px] lg:text-[24px] hover:bg-kinowhite hover:text-kinored duration-200">Books
                                <svg class="fill-current h-4" viewBox="0 0 9 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.9981 7.99966L8.99931 7.99847L7.63578 6.65891L7.63456 6.6601L1.36422 0.5L0.000689844 1.83956L6.27103 7.99966L0 14.1604L1.36353 15.5L7.63456 9.33922L7.63647 9.34109L9 8.00153L8.9981 7.99966Z" />
                                </svg>
                            </button>
                        </a>
                    </div>
                    <?php if ($imageBooks) : ?>
                        <div class="max-w-[91.64%] lg:max-w-1/2">
                            <img alt="<?= $altBooks; ?>" srcset="<?= $srcsetBooks; ?>" sizes="100vw" loading="lazy" />
                        </div>
                    <?php endif; ?>
                </article>

                <article class="relative flex flex-col gap-[18px] border-b pb-[31px] pt-[48px] h-auto w-auto lg:flex-row-reverse lg:justify-center lg:items-center lg:gap-11 lg:border-t lg:pt-[60px] lg:pb-[89px] lg:pt-[80px]">
                    <div class="lg:flex lg:flex-col lg:h-[391px] lg:w-full lg:justify-center lg:gap-10">
                        <div class="flex flex-col gap-4 lg:gap-5">
                            <h3 class="font-display text-3xl"><?= the_field("explore_photographs_title") ?></h3>
                            <p class="max-w-[70ch]"><?php the_field("explore_photographs_description"); ?></p>
                        </div>
                        <a href="photo">
                            <button class="absolute flex flex-row justify-center items-center gap-[8px] p-[12px] bg-kinored text-kinowhite bottom-[31px] right-0 text-xl w-fit h-fit lg:static lg:pl-[32px] lg:pr-[32px] lg:pt-[13.9px] lg:pb-[13.9px] lg:gap-[24px] lg:text-[24px] hover:bg-kinowhite hover:text-kinored duration-200">Photographs
                                <svg class="fill-current h-4" viewBox="0 0 9 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.9981 7.99966L8.99931 7.99847L7.63578 6.65891L7.63456 6.6601L1.36422 0.5L0.000689844 1.83956L6.27103 7.99966L0 14.1604L1.36353 15.5L7.63456 9.33922L7.63647 9.34109L9 8.00153L8.9981 7.99966Z" />
                                </svg>
                            </button>
                        </a>
                    </div>
                    <?php if ($imagePhotographs) : ?>
                        <div class="max-w-[91.64%] lg:max-w-1/2">
                            <img alt="<?= $altPhotographs; ?>" srcset="<?= $srcsetPhotographs; ?>" sizes="100vw" loading="lazy" />
                        </div>
                    <?php endif; ?>
                </article>
            </section>
    <?php
    endwhile;
endif; ?>

        </main>


        <?php get_template_part('parts/shared/letstalk'); ?>

        <?php get_footer(); ?>