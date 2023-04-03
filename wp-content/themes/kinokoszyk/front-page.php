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


<!-- 
<section class="w-screen">
    <h2 class="font-serif text-white pl-5 py-5 text-5xl md:pl-10 lg:pl-20">Let's talk</h2>
    <section class="pt-5 pb-8 px-5 bg-kinogrey md:px-10 md:pt-10 md:pb-14 lg:py-20 lg:pl-20">
        <div class="pb-5 gap-7 lg:pb-10">
            <h3 class="pb-4 font-bold text-xs text-kinoblack md:text-sm">You can now easily reach us by mail</h3>
            <p class="text-xs text-kinodeepblack font-light md:text-sm">While waiting for an answer, why not read some of our news articles?</p>
        </div>
        <div class="flex gap-7">
            <a class="text-kinored">
                <button class="rounded-sm box-content text-sm px-5 py-3 border-solid box-border outline-none md:text-2xl md:py-1 md:px-8" style="box-shadow: inset 0 0 0 2px #751010;">
                    Articles
                </button>
            </a>
            <a class="text-kinowhite">
                <button class="flex gap-x-4 justify-center items-center text-kinowhite rounded-sm text-sm pl-5 pr-7 py-3 bg-kinored md:py-1 md:px-8 md:text-2xl">Contact us
                    <svg class="md:hidden" width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.9981 7.99966L8.99931 7.99847L7.63578 6.65891L7.63456 6.6601L1.36422 0.5L0.000689844 1.83956L6.27103 7.99966L0 14.1604L1.36353 15.5L7.63456 9.33922L7.63647 9.34109L9 8.00153L8.9981 7.99966Z" fill="white" />
                    </svg>
                </button>
            </a>
        </div>
    </section>
</section>
 -->


<?php get_footer();  ?>