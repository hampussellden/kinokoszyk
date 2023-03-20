<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <!-- This is the grid-->
    <div class="grid grid-cols-2 gap-4 p-8 max-w-7xl mx-auto">
        <!-- This is a card in the grid -->
        <?php while (have_posts()) : the_post() ?>
            <?php get_template_part('parts/shared/post', 'card') ?>
        <?php endwhile; ?>
        <!-- EOF: card in the grid -->
    </div>
    <!-- EOF: the grid -->
    <div class="flex justify-center">
        <div class="justify-self-start">
            <?php next_posts_link('Older Posts &raquo;'); ?>
        </div>
        <div class="justify-self-end">
            <?php previous_posts_link('&laquo; Newer Posts'); ?>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>