<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>


<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'order' => 'DESC',
    'orderby' => 'date'
);
$query = new WP_Query($args);
?>



<?php if ($query->have_posts()) : ?>
    <div class="grid grid-cols-3 gap-4 p-8 max-w-7xl mx-auto">
        <?php while ($query->have_posts()) : $query->the_post() ?>
            <?php get_template_part('parts/shared/post', 'card') ?>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>