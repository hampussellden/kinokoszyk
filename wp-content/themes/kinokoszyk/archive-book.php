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
            <?php
            $image = get_field('image');
            $srcset = wp_get_attachment_image_srcset($image['ID']);
            $alt = $image['alt'];
            ?>
            <div class="relative w-full max-h-60 sm:max-h-[650px] lg:max-h-[750px] overflow-hidden">
                <img class="saturate-0 brightness-50" srcset="<?= $srcset; ?>" alt="<?= $alt; ?>" sizes="100vw" />
                <h2 class="absolute bottom-4 left-5 sm:bottom-14 font-display text-4xl sm:text-[120px] lg:text-[140px]">
                    Books
                </h2>
            </div>
        <?php endwhile; ?>
    </section>
<?php endif; ?>
<!-- Books listed -->
<main class="flex flex-col mx-3.5 sm:mx-7 lg:mx-[80px]">
    <div class="">
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    </div>
    <?php if (have_posts()) : ?>
        <section class="grid grid-cols-2 sm:grid-cols-3 pb-5 sm:pb-10 lg:pb-20">
            <?php while (have_posts()) : the_post() ?>
                <?php get_template_part('parts/shared/books') ?>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
</main>



<?php get_footer(); ?>