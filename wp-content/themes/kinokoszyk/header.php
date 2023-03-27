<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- Load Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@500&family=DM+Sans:wght@500&family=Oi&display=swap" rel="stylesheet">
</head>

<body class="bg-stone-900 flex flex-col items-center mx-3 sm:mx-8 h-screen text-slate-50">
    <?php wp_body_open(); ?>
    <?php $menuItems =  wp_get_nav_menu_items('primary-menu'); ?>

    <div class="flex flex-row space-x-4 justify-between w-full border-solid border-b-4 border-slate-50 lg:max-w-screen-md">
        <h1>logotype</h1>
        <div> hamburger</div>
    </div>

    <nav class="">
        <div>
            <div class="flex">
                <?php $currentPageId = get_queried_object_id(); ?>
                <?php if ($menuItems) : ?>
                    <?php foreach ($menuItems as $item) : ?>
                        <a title="<?= $item->title ?>" href="<?= $item->url; ?>" class="<?= $currentPageId == $item->object_id ? 'underline' : 'hidden lg:visible'; ?>">
                            <?= $item->title; ?>
                        </a>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>
    </nav>