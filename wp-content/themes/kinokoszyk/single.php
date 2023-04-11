<?php get_header(); ?>
<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>

<main class="mx-5 sm:mx-7 lg:mx-[60px]">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
            <article class="flex flex-col gap-4">
                <div>
                    <h2 class="font-display text-5xl sm:text-8xl lg:text-9xl lg:pb-10 pt-8 sm:pt-20 mb-7"><?php the_title(); ?></h2>
                    <div class="flex flex-col gap-4"><?php the_content(); ?></div>
                </div>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="w-full h-auto order-first lg:order-last">
                        <img class="object-cover" src="<?= esc_url(get_the_post_thumbnail_url(null, 'large')); ?>" alt="<?= esc_attr(get_the_title()); ?>">
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
            </article>
        <?php endif; ?>
</main>

<?php get_footer(); ?>