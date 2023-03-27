<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <!-- Product Grid -->
    <div class="grid grid-cols-3 gap-4 p-8 max-w-7xl mx-auto">
        <?php while (have_posts()) : the_post() ?>
            <?php get_template_part('parts/shared/photos') ?>
        <?php endwhile; ?>
        <!-- EOF: Product Grid -->
    </div>
<?php endif; ?>


<h1>here are books</h1>

<?php get_footer(); ?>