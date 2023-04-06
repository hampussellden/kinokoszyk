<?php /* Template Name: Books Template */ ?>

<?php
$args = array(
    'post_type' => 'book',
    'order' => 'DESC',
    'orderby' => 'date',
    'meta_key' => 'joanna_helander',
    'meta_value' => "1",
);
$query = new WP_Query($args)

?>

<?php get_header('jh'); ?>
<!-- Hero image -->
<?php if (have_posts()) : ?>
    <section class="max-w-full">
        <?php while (have_posts()) : the_post() ?>
            <?php
            // $image = get_the_post_thumbnail();
            // $srcset = wp_get_attachment_image_srcset($image['ID']);
            $alt = "hej";
            ?>
            <div class="relative flex justify-center items-center w-full max-h-60 sm:max-h-[650px] overflow-hidden">
                <img class="saturate-0 brightness-50" src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= $alt; ?>" sizes="100vw" />
                <h1 class="font-display absolute bottom-2.5 inset-x-0 text-center text-3xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl tracking-widest">
                    Joanna Helander
                </h1>
            </div>
        <?php endwhile; ?>
    </section>
<?php endif; ?>

<!-- Books listed -->
<main class="flex flex-col mx-3.5 sm:mx-7 lg:mx-[60px]">
    <div class="px-1.5 sm:px-3 lg:px-5">
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
    </div>
    <h2 class="font-display text-5xl self-start sm:text-8xl lg:text-9xl lg:pb-10 pt-8 sm:pt-20">Books</h2>
    <?php if ($query->have_posts()) : ?>
        <section class="grid grid-cols-2 sm:grid-cols-3">
            <?php while ($query->have_posts()) : $query->the_post() ?>
                <?php get_template_part('parts/shared/books') ?>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
</main>



<?php get_footer(); ?>