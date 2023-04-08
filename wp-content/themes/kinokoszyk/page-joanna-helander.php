<?php /* Template Name: Example Template */ ?>

<?php get_header('jh'); ?>


<?php


$argsAboutJH = array(
    'post_type' => "page",
    'title' => "About us",
    'posts_per_page' => 1,
    'order' => 'DESC',
    'orderby' => 'date',

);


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

    <h2 class="absolute top-[500px] font-display">JOANNA HELANDER</h2>
    <h3
        class="absolute bottom-0 lg:w-full m-0 leading-headingTwo text-[250px] tracking-tightest  font-normal font-display flex-wrap">
        KINO KOSZYK</h3>

</div>

<?php endif; ?>
<?php
$queryAboutJH = new WP_Query($argsAboutJH);
if ($queryAboutJH->have_posts()) : ?>
<main class="flex flex-col mx-3.5 sm:mx-7 lg:mx-[60px]">
    <?php while ($queryAboutJH->have_posts()) : $queryAboutJH->the_post(); ?>
    <?= the_title(); ?>
    <?= the_content(); ?>
    <?php endwhile; ?>
    </div>
</main>
<?php endif; ?>


<?php get_template_part('parts/shared/letstalk'); ?>

<!-- <section class="absolute top-0 w-screen h-screen bg-kinoblack">
    <section class="h-screen flex justify-start items-end">
        <section>
            <h1 class="font-display text-7xl w-1/2 md:w-full">JOANNA HELANDER</h1>
            <h2 class="font-display text-7xl hidden md:block">KINOKOSZYK</h2>
        </section>
    </section>
</section> -->


<?php get_footer(); ?>