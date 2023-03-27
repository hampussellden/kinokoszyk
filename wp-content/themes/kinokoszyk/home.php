<?php get_header(); ?>

<h2>the news</h2>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
        §
        <h2><?= the_title(); ?></h2>
        <p><?= the_content(); ?></p>
        <a href="<?= the_permalink(); ?>">link</a>
    <?php endwhile; ?>
<?php endif; ?>