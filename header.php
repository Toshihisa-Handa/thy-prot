<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/parts.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/top.css" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body>
    <div class="container">

<!-- ヘッダーの記述 -->
<div class="header-wrapper">


    <div class="header">
        <div class="logo">
            <img class='log-img' src="<?php echo get_template_directory_uri(); ?>/img/logo_01.png"  alt="">
        </div>
        <ul class='nav'>
            <li class="navs">
                <div class="font-10">ホーム</div>
                <div class="font-16">HOME</div>
            </li>
            <li class="navs">
                <div class="font-10">会社概要</div>
                <div class="font-16">COMPANY</div>
            </li>
            <li class="navs">
                <div class="font-10">所有物件</div>
                <div class="font-16">PROPERTY</div>
            </li>
            <li class="navs">
                <div class="font-10">ブログ</div>
                <div class="font-16">BLOG</div>
            </li>
            <li class="navs">
                <div class="font-10">問い合わせ</div>
                <div class="font-16">CONTACT</div>
            </li>
        </ul>
    </div>
</div>