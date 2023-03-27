<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <!-- Product Grid -->
    <div class="grid grid-cols-3 gap-4 p-8 max-w-7xl mx-auto">
        <?php while (have_posts()) : the_post() ?>
            <?php get_template_part('parts/shared/photo') ?>
        <?php endwhile; ?>
        <!-- EOF: Product Grid -->
    </div>
<?php endif; ?>

<?php get_footer(); ?>