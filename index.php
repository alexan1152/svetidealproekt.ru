<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel = "stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head() ?>
</head>
<body>
<h1>Вот</h1>
<ul id = "main-burger-menu">
    <li><a href="https://www.youtube.com/watch?v=tRoszGUp5Sg">Главное меню</a>
    <ul>
        <li><a href="https://oriolo.ru/kak-sdelat-mobilnuyu-versiyu-shablona-dlya-wordpress/" class="li-white">Магазин</a></li>
        <li><a href="https://developer.wordpress.org/themes/basics/template-files/" class="li-white">Дизайнерам</a></li>
        <li><a href="#" class="li-white">Распродажа</a></li>
        <li><a href="https://dwstroy.ru/disc01/" class="li-gray">Каталог</a>
            <ul>
                <li><a href="#" class="li-white">Люстры</a></li>
                <li><a href="#" class="li-white">Бра и подсветки</a></li>
                <li><a href="#" class="li-white">Споты</a></li>
                <li><a href="#" class="li-white">Настольные лампы</a></li>
                <li><a href="#" class="li-white">Торшеры</a></li>
                <li><a href="#" class="li-white">Трековые системы</a></li>
                <li><a href="#" class="li-white">Уличное освещение</a></li>
                <li><a href="#" class="li-white">Офисное освещение</a></li>
                <li><a href="#" class="li-white">Лампочки</a></li>
                <li><a href="#" class="li-white">Светодиодная подсветка</a></li>
                <li><a href="#" class="li-white">Предметы интерьера</a></li>
                <li><a href="#" class="li-white">Электротовары</a></li>
                <li><a href="#" class="li-white">Комплектующие</a></li>
                <li><a href="#" class="li-white">Новогодние товары</a></li>
            </ul>
        </li>
        <li><a href="#" class="li-gray">Оплата</a></li>
        <li><a href="#" class="li-gray">Контакты</a></li>
    </ul>
    </li>
    <li><a href="#">Полная версия сайта</a></li>
</ul>
<?php wp_footer() ?>
</body>
</html>
