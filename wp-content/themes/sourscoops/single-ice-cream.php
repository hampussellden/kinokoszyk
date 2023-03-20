<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <!-- Product Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 py-20 max-w-7xl mx-auto">
        <?php while (have_posts()) : the_post() ?>
            <?php get_template_part('parts/shared/product', 'single') ?>
        <?php endwhile; ?>
    </div>
    <!-- EOF: Product Grid -->
<?php endif; ?>


<?php get_footer(); ?>