<?php get_header(); ?>

<?php
$args = array(
    'post_type' => 'photo',
    "posts_per_page" => 18,
    'order' => 'DESC',
    'orderby' => 'date',
    'meta_key' => 'joanna_helander',
    'meta_value' => "0",
);
$posts = new WP_Query($args);

?>
<main class="flex flex-col mx-3.5 sm:mx-7 lg:mx-[80px]">
    <div class="">
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    </div>
    <h2 class="font-display text-5xl self-start sm:text-8xl lg:text-9xl lg:pb-10 pt-8 sm:pt-20">Photographs</h2>
    <?php if ($posts->have_posts()) : ?>
        <section class="flex flex-row flex-wrap justify-center py-10 sm:py-20">
            <?php while ($posts->have_posts()) : $posts->the_post() ?>
                <?php get_template_part('parts/shared/photos') ?>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>