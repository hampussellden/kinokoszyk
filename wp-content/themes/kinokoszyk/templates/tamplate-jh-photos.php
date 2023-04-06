<?php /* Template Name: Photos Template */ ?>

<?php get_header('jh'); ?>
<?php
$args = array(
    'post_type' => 'photo',
    'meta_key' => 'joanna_helander',
    'meta_value' => true,
);
$query = new WP_Query($args);
$total = $query->found_posts;
$aThird = $total / 3;

$height = '1500px';
?>

<main class="flex flex-col mx-3.5 sm:mx-7 lg:mx-[60px]">
    <div class="px-1.5 sm:px-3 lg:px-5">
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    </div>
    <?php if ($query->have_posts()) : ?>
        <section class="flex flex-col flex-wrap pt-6 sm:pt-10 max-h-[1500px] overflow-hidden">
            <?php while ($query->have_posts()) : $query->the_post() ?>
                <?php if (get_field('joanna_helander')) :  ?>
                    <?php get_template_part('parts/shared/jh-photos') ?>
                <?php endif ?>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
</main>
<?php get_footer(); ?>