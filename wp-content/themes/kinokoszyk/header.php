<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- Load Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdn.tailwindcss.com/dist/tailwind.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&family=Playfair+Display&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&family=Playfair+Display&display=swap"
        rel="stylesheet">
</head>

<body class="bg-kinoblack flex flex-col items-center mx-3 sm:mx-8 h-screen text-white">
    <?php wp_body_open(); ?>
    <?php $menuItems =  wp_get_nav_menu_items('primary-menu'); ?>

    <div
        class="lg:h-12 flex flex-row lg:justify-center space-x- justify-between w-full border-solid border-b-4 border-kinowhite lg:max-w-screen-md items-baseline">
        <a class="flex flex-row justify-center items-baseline gap-x-[20px]" href="<?= site_url(); ?>">
            <img class="h-[20px] w-auto lg:h-[36px]" src="<?= get_template_directory_uri(); ?>/Vector.svg" class="" />
            <h1>Kino Koszyk</h1>
        </a>
        <div class="space-y-2 lg:hidden" id="hamburger-menu">
            <div class="w-8 h-0.5 bg-kinowhite"></div>
            <div class="w-8 h-0.5 bg-kinowhite"></div>
            <div class="w-8 h-0.5 bg-kinowhite"></div>
        </div>
    </div>

    <nav class="">
        <div>
            <div class="flex space-x-4">
                <?php $currentPageId = get_queried_object_id(); ?>
                <?php if ($menuItems) : ?>
                <?php foreach ($menuItems as $item) : ?>
                <a title="<?= $item->title ?>" href="<?= $item->url; ?>"
                    class="<?= $currentPageId == $item->object_id ? 'underline' : 'hidden lg:inline-block'; ?>">
                    <?= $item->title; ?>
                </a>
                <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>

    </nav>