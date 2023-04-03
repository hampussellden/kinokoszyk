<?php
get_header();
?>

<main class="container mx-5 my-8 px-4">
    <h2 class="font-display text-5xl mb-8">News</h2>
    <section class="flex flex-col justify-center md:flex-row md:flex-wrap gap-6">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="flex flex-col bg-kinowhite break-words md:w-[300px]">
                    <?php if (has_post_thumbnail()) : ?>
                        <img class="w-full h-auto object-cover" src="<?= esc_url(get_the_post_thumbnail_url(null, 'large')); ?>" alt="<?= esc_attr(get_the_title()); ?>">
                    <?php endif; ?>
                    <div class="text-kinodeepblack pr-4 pl-4 pb-10">
                        <h3 class="font-display text-2xl text-kinodeepblack mb-3 mt-4"><?= the_title(); ?></h3>
                        <p><?= the_content(); ?></p>
                        <div class="mt-6">
                            <a class="text-kinored font-bold" href="<?= the_permalink(); ?>">Read More ></a>
                        </div>
                    </div>
                </article>
        <?php endwhile;
        endif;
        ?>
    </section>
</main>

<?php
get_footer();
?>