<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- Load Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@500&family=DM+Sans:wght@500&family=Oi&display=swap" rel="stylesheet">
</head>

<body <?php body_class("bg-pink-light text-brown"); ?>>
    <?php wp_body_open(); ?>
    <?php $menuItems =  wp_get_nav_menu_items('primary-menu'); ?>

    <nav>
        <div>
            <div>
                <?php $currentPageId = get_queried_object_id(); ?>
                <?php if ($menuItems) : ?>
                    <?php foreach ($menuItems as $item) : ?>
                        <a title="<?= $item->title ?>" href="<?= $item->url; ?>" class="<?= $currentPageId == $item->object_id ? 'underline' : ' '; ?>">
                            <?= $item->title; ?>
                        </a>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>
    </nav>