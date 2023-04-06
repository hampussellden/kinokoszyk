<?php get_header(); ?>
<?php
$args = array(
    'post_type' => 'movie',
    'posts_per_page' => 1,
    'order' => 'DESC',
    'orderby' => 'date',
);
$query = new WP_Query($args)

?>
<!-- Hero image -->
<?php if ($query->have_posts()) : ?>
    <section class="">
        <?php while ($query->have_posts()) : $query->the_post() ?>
            <a href="<?php the_permalink(); ?>">
                <?php $image = get_field('image');
                $srcset = wp_get_attachment_image_srcset($image['ID']);
                $alt = $image['alt'];
                ?>
                <div class="relative max-h-60 sm:max-h-[650px] lg:max-h-[750px] overflow-hidden">
                    <img class="saturate-0 brightness-50" srcset="<?= $srcset; ?>" alt="<?= $alt; ?>" sizes="100vw" />
                    <h2 class="absolute bottom-4 left-5 sm:bottom-14 font-display text-4xl sm:text-[120px] lg:text-[140px]">
                        Movies
                    </h2>
                </div>
            </a>
        <?php endwhile; ?>
    </section>
<?php endif; ?>
<main class="flex flex-col mx-3.5 sm:mx-7 lg:mx-[60px]">
    <div class="px-1.5 sm:px-3 lg:px-5">
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    </div>
    <section class="flex flex-col">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>
                <?php get_template_part('parts/shared/movies') ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</main>

<?php get_template_part('parts/shared/letstalk') ?>

<?php get_footer(); ?>