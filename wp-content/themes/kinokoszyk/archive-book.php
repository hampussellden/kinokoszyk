<?php get_header(); ?>

<main class="flex flex-col">
    <?php if (have_posts()) : ?>
        <h2 class="font-display text-5xl sm:text-8xl lg:text-9xl flex-start">Books</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 ">
            <?php while (have_posts()) : the_post() ?>
                <?php get_template_part('parts/shared/books') ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>