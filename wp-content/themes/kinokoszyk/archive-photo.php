<?php get_header(); ?>


<main class="flex flex-col mx-3.5 sm:mx-7 lg:mx-[80px]">
    <div class="">
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    </div>
    <h2 class="font-display text-5xl self-start sm:text-8xl lg:text-9xl lg:pb-10 pt-8 sm:pt-20">Photographs</h2>
    <?php if (have_posts()) : ?>
        <section class="flex flex-row flex-wrap justify-center py-10 sm:py-20">
            <?php while (have_posts()) : the_post() ?>
                <?php if (!get_field('joanna_helander')) :  ?>
                    <?php get_template_part('parts/shared/photos') ?>
                <?php endif ?>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>