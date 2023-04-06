<?php get_header(); ?>
<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>

<main class="mx-3.5 sm:mx-7 lg:mx-[60px]">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
            <article>
                <?php if (has_post_thumbnail()) : ?>
                    <img class="w-full h-auto object-cover" src="<?= esc_url(get_the_post_thumbnail_url(null, 'large')); ?>" alt="<?= esc_attr(get_the_title()); ?>">
                <?php else : ?>
                    <img class="w-full max-h-[341px] object-cover" src="<?= get_template_directory_uri(); ?>/Vector.svg" alt="Placeholder image.">
                <?php endif; ?>
                <h2 class="font-display text-5xl sm:text-8xl lg:text-9xl lg:pb-10 pt-8 sm:pt-20"><?php the_title(); ?></h2>
                <div class="flex"><?php the_content(); ?></div>
            <?php endwhile; ?>
            </article>
        <?php endif; ?>
</main>

<?php get_footer(); ?>