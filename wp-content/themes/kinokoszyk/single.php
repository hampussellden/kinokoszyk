<?php get_header(); ?>

<?php
$image = get_field('news_image');

if ($image) {
    $srcset = wp_get_attachment_image_srcset($image['ID']);
    $alt = $image['alt'];
} ?>

<main class="mx-5 sm:mx-7 lg:mx-[60px]">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
            <article class="flex flex-col gap-4">
                <div>
                    <?php if (the_field('news_title')) : ?>
                        <h2 class="font-display text-5xl sm:text-8xl lg:text-9xl lg:pb-10 pt-8 sm:pt-20 mb-7"><?php the_field('news_title'); ?></h2>
                    <?php endif; ?>
                    <?php if (the_field('news_description')) : ?>
                        <div class="flex flex-col gap-4"><?php the_field('news_description'); ?></div>
                    <?php endif; ?>
                    <?php if ($image) : ?>
                        <div>
                            <img alt="<?= $alt; ?>" srcset="<?= $srcset; ?>" sizes="100vw" loading="lazy" />
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
            </article>
        <?php endif; ?>
</main>

<?php get_footer(); ?>