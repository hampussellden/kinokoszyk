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
<div class="flex flex-col relative">
    <?php while ($queryHero->have_posts()) : $queryHero->the_post(); ?>
    <?= the_content(); ?>
    <?php endwhile; ?>
    <h2 class="p-0 absolute order-1">KINOKOSZYK</h2>
</div>
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
    </div>
</main>
<?php endif; ?>




<?php get_template_part('parts/shared/letstalk'); ?>


<?php get_footer();  ?>