<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <script src="https://kit.fontawesome.com/581c185f2a.js" crossorigin="anonymous"></script>
    <link href="<?php echo get_template_directory_uri(); ?>/css/blog.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/parts.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/property.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/top.css" rel="stylesheet">

    
<?php wp_head(); ?>
<body>
 <div class="container">
        <!-- ヘッダー -->
<!-- ヘッダーの記述 -->
<div class="header-wrapper">


    <div class="header">
        <div class="logo">
            <img class='log-img' src="<?php echo get_template_directory_uri(); ?>/img/logo_01.png"  alt="">
        </div>
    <?php wp_nav_menu(array(
        'theme_location'=>'sitenav',
        'container'=>'nav',
        'container_class'=>'mainmenu',
        'container_id'=>'mainmenu'
    )); ?>
    </div>
    <div class="headerLine"></div>
    </div>