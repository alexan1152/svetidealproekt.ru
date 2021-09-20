<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
    <?php get_search_form(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    <nav class="main-menu">
        <? wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
    </nav>