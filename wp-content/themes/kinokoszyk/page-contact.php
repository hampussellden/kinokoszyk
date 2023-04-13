<?php get_header(); ?>

<?php $contact =  wp_get_nav_menu_items('footer-contacts'); ?>

<?php
$joannaImage = get_field('contact-page_image_joanna');
$joannaSrcset = wp_get_attachment_image_srcset($joannaImage['ID']);
$joannaAlt = $joannaImage['alt'];

$boImage = get_field('contact-page_image_bo');
$boSrcset = wp_get_attachment_image_srcset($boImage['ID']);
$boAlt = $boImage['alt'];
?>


<section class="w-full flex flex-col items-start px-9 md:px-20 lg:px-40 pt-20 bg-kinoblack text-white pb-64">
    <h2 class="pb-12 text-6xl font-display font-medium md:pb-20 md:text-8xl lg:text-9xl">Contact us</h2>
    <section class="w-full flex flex-col md:items-top md:flex-row md:justify-between">
        <section class="flex flex-col gap-8 pb-14 md:px-2">
            <h2 class="text-3xl font-display font-medium md:text-3xl lg:text-4xl">Contact information</h2>
            <?php foreach ($contact as $item) : ?>
                <a class="flex items-center" href="<?= $item->url ?>">
                    <?php if (str_contains($item->title, "mail")) : ?>
                        <img src="../../../wp-admin/images/email.svg" alt="email icon" class="w-6 h-6">
                    <?php endif; ?>
                    <?php if (str_contains($item->title, "Tel")) : ?>
                        <img src="../../../wp-admin/images/phone.svg" alt="phone icon" class="w-6 h-6">
                    <?php endif; ?>
                    <?php if (str_contains($item->url, "maps")) : ?>
                        <img src="../../../wp-admin/images/location_svg.svg" alt="location icon" class="w-6 h-6">
                    <?php endif; ?>
                    <span class="text-sm pl-4 md:text-base lg:text-xl"><?= $item->title ?></span>
                </a>
            <?php endforeach ?>

        </section>
        <section class="flex gap-12">
            <div class="flex flex-col items-left">
                <img class="w-32 h-32 md:w-40 md:h-40 lg:w-52 lg:h-52" alt="<?= $joannaAlt; ?>" srcset="<?= $joannaSrcset; ?>" sizes="33vw" />
                <p class="mt-3">Joanna Helander</p>
            </div>

            <div class="flex flex-col items-left">
                <img class="w-32 h-32 md:w-40 md:h-40 lg:w-52 lg:h-52" alt="<?= $boAlt; ?>" srcset="<?= $boSrcset; ?>" sizes="33vw" />
                <p class="mt-3">Bo Persson</p>
            </div>

        </section>

    </section>
</section>

<?php get_footer(); ?>