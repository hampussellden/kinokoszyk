<?php get_header(); ?>


<main class="flex flex-col mx-3.5 sm:mx-7 lg:mx-[60px]">
    <div class="px-1.5 sm:px-3 lg:px-5">
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    </div>
    <h2 class="font-display text-5xl self-start sm:text-8xl lg:text-9xl lg:pb-10 pt-8 sm:pt-20">Photographs</h2>
    <?php if (have_posts()) : ?>
        <section class="flex flex-row space-x-4 pt-10 sm:pt-20">
            <?php while (have_posts()) : the_post() ?>
                <?php if (!get_field('joanna_helander')) :  ?>
                    <?php get_template_part('parts/shared/photos') ?>
                <?php endif ?>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>