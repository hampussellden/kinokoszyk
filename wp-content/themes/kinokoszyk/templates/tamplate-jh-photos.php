<?php /* Template Name: Photos Template */ ?>


<?php
//query
?>


<?php get_header('jh'); ?>

<?php if ($query->have_posts()) : ?>
    <!-- Product Grid -->
    <div class="grid grid-cols-3 gap-4 p-8 max-w-7xl mx-auto">
        <?php while (have_posts()) : the_post() ?>
            <?php get_template_part('parts/shared/photos') ?>
        <?php endwhile; ?>
        <!-- EOF: Product Grid -->
    </div>
<?php endif; ?>