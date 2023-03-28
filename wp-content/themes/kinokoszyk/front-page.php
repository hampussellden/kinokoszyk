<?php get_header(); ?>

<?php


$args = array(
    'post_type' => "page",
    'title' => "About us",
    'posts_per_page' => 1,
    'order' => 'DESC',
    'orderby' => 'date',

);
$query = new WP_Query($args);
if ($query->have_posts()) : ?>
<div class="">
    <?php while ($query->have_posts()) : $query->the_post(); ?>
    <?= the_title(); ?>
    <?= the_content(); ?>
    <?php endwhile; ?>
</div>
<?php endif; ?>





<?php get_footer();  ?>