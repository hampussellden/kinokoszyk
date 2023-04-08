<?php get_header(); ?>

<?php



$argsHero = array(
    'post_type' => "page",
    'title' => "hero",
    'posts_per_page' => 1,
    'order' => 'DESC',
    'orderby' => 'date',

);

$argsAboutUs = array(
    'post_type' => "page",
    'title' => "About us",
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

    <h2
        class="lg:invisible absolute bottom-0 w-full m-0 leading-headingTwo text-[250px] tracking-tightest  font-normal font-display ">
        KINO KOSZYK</h2>

</div>

<?php endif; ?>


<?php
$queryAboutUs = new WP_Query($argsAboutUs);
if ($queryAboutUs->have_posts()) : ?>
<main class="flex flex-col mx-3.5 sm:mx-7 lg:mx-[60px]">
    <?php while ($queryAboutUs->have_posts()) : $queryAboutUs->the_post(); ?>
    <?= the_title(); ?>
    <?= the_content(); ?>
    <?php endwhile; ?>
</main>
<?php endif; ?>




<?php get_template_part('parts/shared/letstalk'); ?>


<?php get_footer();  ?>