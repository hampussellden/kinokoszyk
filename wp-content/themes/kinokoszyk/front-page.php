<?php get_header(); ?>


<?php $imageAbout = get_field('about_image');
$srcsetAbout = wp_get_attachment_image_srcset($imageAbout['ID']);
$altAbout = $imageAbout['alt'];  ?>

<?php $imageMovies = get_field('explore_movies_image');
$srcsetMovies = wp_get_attachment_image_srcset($imageMovies['ID']);
$altMovies = $imageMovies['alt'];  ?>

<?php $imageBooks = get_field('explore_books_image');
$srcsetBooks = wp_get_attachment_image_srcset($imageBooks['ID']);
$altBooks = $imageBooks['alt'];  ?>

<?php $imagePhotographs = get_field('explore_photographs_image');
$srcsetPhotographs = wp_get_attachment_image_srcset($imagePhotographs['ID']);
$altPhotographs = $imagePhotographs['alt'];  ?>

<?php
$argsHero = array(
    'post_type' => "page",
    'title' => "hero",
    'posts_per_page' => 1,
    'order' => 'DESC',
    'orderby' => 'date',

);
$queryHero = new WP_Query($argsHero);
if ($queryHero->have_posts()) : ?>
<div class="relative inline-block">
    <?php while ($queryHero->have_posts()) : $queryHero->the_post(); ?>
    <div class="block min-h-[55vw] w-full "><?= the_content(); ?></div>
    <?php endwhile; ?>

    <h2 class="absolute bottom-0 self-center m-0
        sm:text-[112px] md:text-[136px] lg:text-[180px] xl:text-[248px]
        sm:leading-headingOne md:leading-headingTwo 
        lg:leading-headingThree xl:leading-headingFour
        tracking-tightest font-normal font-display 
        hidden sm:inline-block">
        KINO<span class="lg:hidden md:hidden"> </span>KOSZYK</h2>



</div>

<?php endif; ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main class="mx-3.5 sm:mx-7 lg:mx-[60px]">
    <div class="w-full flex flex-row ">
        <h3 class=" text-5xl sm:text-[96px] lg:text-[136px] font-display tracking-tighter font-normal 
        pt-12 sm:pt-20 lg:pt-32 
        pb-6 sm:pb-8 lg:pb-10
        ">
            <?= the_field("about_title"); ?>
        </h3>
    </div>
    <div class="w-full flex flex-row justify-around gap-[44px]">
        <p class="lg:max-w-[60ch] lg:text-xl sm:text-lg ">
            <?= the_field("about_description"); ?>
        </p>
        <img class="max-w-1/2 object-contain hidden self-start sm:inline-block" alt="<?= $altAbout; ?>"
            srcset="<?= $srcsetAbout; ?>" sizes="50vw" loading="lazy" />
    </div>

    <div>
        <h3 class="lg:text-[128px] font-display tracking-tighter font-normal pt-[128px]">
            <?= the_field("explore_movies_title"); ?>
        </h3>
        <p>
            <?= the_field("explore_movies_description"); ?>
        </p>
        <img class="" alt="<?= $altMovies; ?>" srcset="<?= $srcsetMovies; ?>" sizes="100vw" loading="lazy" />

    </div>

    <div>
        <h3 class="lg:text-[128px] font-display tracking-tighter font-normal pt-[128px]">
            <?= the_field("explore_books_title"); ?>
        </h3>
        <p>
            <?= the_field("explore_books_description"); ?>
        </p>
        <img class="" alt="<?= $altBooks; ?>" srcset="<?= $srcsetBooks; ?>" sizes="100vw" loading="lazy" />
    </div>

    <div>
        <h3 class="lg:text-[128px] font-display tracking-tighter font-normal pt-[128px]">
            <?= the_field("explore_photographs_title"); ?>
        </h3>
        <p>
            <?= the_field("explore_photographs_description"); ?>
        </p>
        <img class="" alt="<?= $altPhotographs; ?>" srcset="<?= $srcsetPhotographs; ?>" sizes="100vw" loading="lazy" />
    </div>
    <?php
    endwhile;
endif; ?>

</main>

<?php get_template_part('parts/shared/letstalk'); ?>


<?php get_footer(); ?>