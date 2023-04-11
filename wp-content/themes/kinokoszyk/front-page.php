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
    <div class="block w-full "><?= the_content(); ?></div>
    <?php endwhile; ?>

    <h2
        class="lg:visible lg: absolute lg:bottom-0 lg:w-full lg:m-0 lg:leading-headingTwo lg:text-[250px] lg:tracking-tightest  lg:font-normal lg:font-display  ">
        KINOKOSZYK</h2>

    <h2 class="lg:invisible absolute bottom-0 w-full m-0 md:leading-headingTwo md:text-[180px] 
        md:leading-headingThree sm:text-[123px] sm:leading-headingFour
        font-normal font-display tracking-tightest  ">
        KINO KOSZYK</h2>

</div>

<?php endif; ?>






<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<h3 class="lg:text-[128px] font-display tracking-tighter font-normal pt-[128px]"> <?= the_field("about_title"); ?>
</h3>
<p>
    <?= the_field("about_description"); ?>
</p>
<img class="" alt="<?= $altAbout; ?>" srcset="<?= $srcsetAbout; ?>" sizes="100vw" loading="lazy" />


<h3 class="lg:text-[128px] font-display tracking-tighter font-normal pt-[128px]">
    <?= the_field("explore_movies_title"); ?>
</h3>
<p>
    <?= the_field("explore_movies_description"); ?>
</p>
<img class="" alt="<?= $altMovies; ?>" srcset="<?= $srcsetMovies; ?>" sizes="100vw" loading="lazy" />



<h3 class="lg:text-[128px] font-display tracking-tighter font-normal pt-[128px]">
    <?= the_field("explore_books_title"); ?>
</h3>
<p>
    <?= the_field("explore_books_description"); ?>
</p>
<img class="" alt="<?= $altBooks; ?>" srcset="<?= $srcsetBooks; ?>" sizes="100vw" loading="lazy" />


<h3 class="lg:text-[128px] font-display tracking-tighter font-normal pt-[128px]">
    <?= the_field("explore_photographs_title"); ?>
</h3>
<p>
    <?= the_field("explore_photographs_description"); ?>
</p>
<img class="" alt="<?= $altPhotographs; ?>" srcset="<?= $srcsetPhotographs; ?>" sizes="100vw" loading="lazy" />

<?php
    endwhile;
endif; ?>



<?php get_template_part('parts/shared/letstalk'); ?>


<?php get_footer(); ?>