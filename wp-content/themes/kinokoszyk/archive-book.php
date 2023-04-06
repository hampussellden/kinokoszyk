<?php get_header(); ?>
<?php

$args = array(
    'post_type' => 'book',
    'posts_per_page' => 1,
    'order' => 'DESC',
    'orderby' => 'date',
);
$query = new WP_Query($args)

?>
<!-- Hero image -->
<?php if ($query->have_posts()) : ?>
    <section class="max-w-full">
        <?php while ($query->have_posts()) : $query->the_post() ?>
            <a href="<?php the_permalink(); ?>">
                <div class="relative w-full max-h-60 sm:max-h-[650px] lg:max-h-[750px] overflow-hidden">
                    <img class="saturate-0" src="<?= the_field('image') ?>" alt="">
                    <h2 class="absolute bottom-4 left-5 sm:bottom-14 font-display text-4xl sm:text-[120px] lg:text-[140px]">
                        Books
                    </h2>
                </div>
            </a>
        <?php endwhile; ?>
    </section>
<?php endif; ?>
<!-- Books listed -->
<main class="flex flex-col mx-3.5 sm:mx-7 lg:mx-[60px]">
    <div class="px-1.5 sm:px-3 lg:px-5">
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    </div>
    <?php if (have_posts()) : ?>
        <section class="grid grid-cols-2 sm:grid-cols-3">
            <?php while (have_posts()) : the_post() ?>
                <?php get_template_part('parts/shared/books') ?>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
</main>



<?php get_footer(); ?>