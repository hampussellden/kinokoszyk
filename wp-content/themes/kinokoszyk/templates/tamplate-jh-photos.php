<?php /* Template Name: Photos Template */ ?>

<?php get_header('jh'); ?>
<?php
$args = array(
    'post_type' => 'photo'
);
$query = new WP_Query($args);
$height = '2000px';
?>

<main class="flex flex-col mx-3.5 sm:mx-7 lg:mx-[60px]">
    <div class="px-1.5 sm:px-3 lg:px-5">
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    </div>
    <h2 class="font-display text-5xl sm:text-8xl lg:text-9xl lg:pb-10 pt-8 sm:pt-20">Photos</h2>
    <?php if ($query->have_posts()) : ?>
        <div class="flex flex-col flex-wrap flex-2 lg:flex-3 gap-y-4 gap-x-4 pt-10 sm:pt-20 max-h-[<?= $height ?>]">
            <?php while ($query->have_posts()) : $query->the_post() ?>
                <?php if (get_field('joanna_helander')) :  ?>
                    <?php get_template_part('parts/shared/jh-photos') ?>
                <?php endif ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</main>
<!-- test -->
<main class="flex flex-col mx-3.5 sm:mx-7 lg:mx-[60px]">
    <div class="px-1.5 sm:px-3 lg:px-5">
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    </div>
    <h2 class="font-display text-5xl sm:text-8xl lg:text-9xl lg:pb-10 pt-8 sm:pt-20">Photos</h2>
    <?php if ($query->have_posts()) : ?>
        <div class="grid gridgap-y-4 gap-x-4 pt-10 sm:pt-20 max-h-[1500px]">
            <?php while ($query->have_posts()) : $query->the_post() ?>
                <?php if (get_field('joanna_helander')) :  ?>
                    <?php get_template_part('parts/shared/jh-photos') ?>
                <?php endif ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</main>
<?php get_footer(); ?>