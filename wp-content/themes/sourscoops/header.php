<?php
$primary_menu = wp_get_nav_menu_items('Primary Menu');
$secondary_menu = wp_get_nav_menu_items('Secondary Menu');
$current_page_id = get_queried_object_id();
?>
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
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@500&family=DM+Sans:wght@500&family=Oi&display=swap" rel="stylesheet">
</head>

<body <?php body_class("bg-pink-light text-brown"); ?>>
    <?php wp_body_open(); ?>
    <nav class="font-mono border-b-2 border-brown text-lg px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-12">
            <div class="col-span-5 py-5 flex gap-10 items-center">
                <?php foreach ($primary_menu as $link) : ?>
                    <a title="<?= $link->title ?>" class="<?= $current_page_id == $link->object_id ? 'underline' : '' ?> " href="<?= $link->url ?>"><?= $link->title ?></a>
                <?php endforeach ?>
            </div>
            <div class="col-span-2 flex justify-center items-center py-3">
                <a href="/"><img class="h-16 w-auto" src="<?= get_template_directory_uri(); ?>/src/images/sour-scoops-logo.svg" /></a>
            </div>
            <div class="col-span-5 flex justify-end items-center py-5">
                <?php foreach ($secondary_menu as $link) : ?>
                    <a title="<?= $link->title ?>" class="<?= $current_page_id == $link->object_id ? 'underline' : '' ?>" href="<?= $link->url ?>"><?= $link->title ?></a>
                <?php endforeach ?>
            </div>
        </div>
    </nav>