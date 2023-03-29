<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- Load Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>


    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdn.tailwindcss.com/dist/tailwind.min.css">

    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@500&family=DM+Sans:wght@500&family=Oi&display=swap" rel="stylesheet">
</head>

<body class="bg-kinoblack flex flex-col items-center mx-3 sm:mx-8 h-screen text-white">
    <?php wp_body_open(); ?>
    <?php $menuItems =  wp_get_nav_menu_items('primary-menu'); ?>

    <div class="lg:h-12 flex flex-row lg:justify-center space-x- justify-between w-full border-solid border-b-4 border-kinowhite lg:max-w-screen-md items-baseline">
        <a class="flex flex-row justify-center items-baseline gap-x-[20px]" href="<?= site_url(); ?>">
            <img class="h-[20px] w-auto lg:h-[36px]" src="<?= get_template_directory_uri(); ?>/Vector.svg" class="" />
            <h1>Kino Koszyk</h1>
        </a>
        <div class="space-y-2 lg:hidden" id="hamburger-menu">
            <div class="w-8 h-0.5 bg-gray-600"></div>
            <div class="w-8 h-0.5 bg-gray-600"></div>
            <div class="w-8 h-0.5 bg-gray-600"></div>
        </div>
    </div>

    <nav class="">
        <div>
            <div class="flex space-x-4">
                <?php $currentPageId = get_queried_object_id(); ?>
                <?php if ($menuItems) : ?>
                    <?php foreach ($menuItems as $item) : ?>
                        <a title="<?= $item->title ?>" href="<?= $item->url; ?>" class="<?= $currentPageId == $item->object_id ? 'underline' : 'hidden lg:inline-block'; ?>">
                            <?= $item->title; ?>
                        </a>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>

    </nav>