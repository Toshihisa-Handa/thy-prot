<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <script src="https://kit.fontawesome.com/581c185f2a.js" crossorigin="anonymous"></script>
    <link href="<?php echo get_template_directory_uri(); ?>/css/glide.core.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/glide.theme.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/blog.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/single.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/tag.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/parts.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/property.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/top.css" rel="stylesheet">
   
    
<?php wp_head(); ?>
</head>
<body>
 <div class="container">
        <!-- ヘッダー -->
<!-- ヘッダーの記述 -->
<div id='header' class="header-wrapper">


    <div class="header">
        <div class="logo"> 
        <a href="<?php echo home_url();?>"> 
            <img class='logo-img' src="<?php echo get_template_directory_uri(); ?>/img/logo_02.png"  alt="">
        </a>
        </div>
    <?php wp_nav_menu(array(
        'theme_location'=>'sitenav',
        'container'=>'nav',
        'container_class'=>'nav',
        'container_id'=>'mainmenu'
    )); ?>
        <ul class='nav2'>
            <li id='hmenu' class="hmenu">
                <div class="font-16"><i class="fas fa-bars"></i></div>
            </li>
        </ul>

    </div>
    <div class="headerLine"></div>
    </div>