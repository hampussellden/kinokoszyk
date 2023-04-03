<?php get_header(); ?>
<main class="flex flex-col mx-5 sm:mx-10 lg:mx-20">
    <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
            <?php get_template_part('parts/shared/book') ?>
        <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_template_part('parts/shared/letstalk') ?>
<?php get_footer(); ?>