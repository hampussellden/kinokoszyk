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
    <main class="flex flex-col mx-3.5 sm:mx-7 lg:mx-[60px]">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?= the_title(); ?>
            <?= the_content(); ?>
        <?php endwhile; ?>
        </div>
    </main>
<?php endif; ?>


<?php get_template_part('parts/shared/letstalk'); ?>


<?php get_footer();  ?>