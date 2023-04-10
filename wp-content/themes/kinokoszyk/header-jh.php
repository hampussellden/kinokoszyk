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

<body class="bg-kinoblack flex flex-col items-center h-screen text-white relative pt-10 group font-body">
    <?php wp_body_open(); ?>
    <?php $menuItems =  wp_get_nav_menu_items('secondary-menu'); ?>

    <div
        class="lg:mb-4 flex flex-row lg:justify-center space-x- justify-between w-full lg:max-w-screen-md items-baseline bg-kinoblack">
        <a class="flex flex-row justify-center items-center gap-x-[20px]"
            href="<?= site_url() . "/joanna-helander/"; ?>">
            <img class="h-[20px] w-auto lg:h-[36px]" src="<?= get_template_directory_uri(); ?>/jhlogo.svg" class="" />
            <h1 class="font-display text-2xl lg:text-[42px] lg:leading-headingOne lg:font-bold lg:tracking-tight">
                Joanna
                Helander</h1>
        </a>
        <div class=" mt-2.5 mr-2.5 space-y-2 z-50 lg:hidden group-[.active]:fixed top-10 right-0.5" id="hamburger-menu">
            <div class="w-8 h-0.5 bg-kinowhite group-[.active]:rotate-45 group-[.active]:translate-y-[10px]"></div>
            <div class="w-8 h-0.5 bg-kinowhite group-[.active]:opacity-0"></div>
            <div class="w-8 h-0.5 bg-kinowhite group-[.active]:-rotate-45 group-[.active]:-translate-y-[10px]"></div>
            <!-- Slideover meny -->
        </div>
    </div>
    <!-- hamburger bar -->

    <div id="navigation" class="group top-[266px] lg:border-solid lg:border-t-[1px] lg:border-kinowhite">
        <nav
            class="flex flex-col lg:flex-row w-full h-screen z-40 bg-kinoblack fixed inset-0 translate-x-full group-[.active]:translate-x-0 justify-center items-center transition-transform duration-300  lg:h-fit lg:z-auto lg:bg-inherit lg:static lg:translate-x-0">
            <div
                class="leading-link font-normal flex flex-col lg:flex-row items-center justify-center lg:gap-8 lg:text-[20px] gap-y-12 text-[32px] lg:pt-[29px]">
                <?php $currentPageId = get_queried_object_id(); ?>
                <?php if ($menuItems) : ?>
                <?php foreach ($menuItems as $key => $item) : ?>

                <?php if ($item->title === "Kino Koszyk") : ?>
                <a title="<?= $item->title ?>" href="<?= $item->url; ?>"
                    class="<?= $currentPageId == $item->object_id ? 'underline order-1 border-t lg:order-first lg:border-none' : 'lg:border-none lg:order-first  order-1 border-t w-fit lg:inline-block'; ?>">
                    <?= $item->title; ?>
                    <div class="-"></div>
                </a>
                <?php continue ?>
                <?php endif ?>
                <a title="<?= $item->title ?>" href="<?= $item->url; ?>"
                    class="<?= $currentPageId == $item->object_id ? 'underline' : 'w-fit lg:inline-block'; ?>">
                    <?= $item->title; ?>
                </a>
                <?php endforeach ?>
                <?php endif ?>

            </div>
        </nav>
    </div>