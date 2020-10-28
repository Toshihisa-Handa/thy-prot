<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<?php get_template_part('parts/head'); ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/top.css" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body>
    <div class="container">
    <!-- ヘッダー -->
    <?php get_template_part('parts/header'); ?>
    <!-- ヘッダーここまで -->
    <!-- アバウト -->
    <div class="about">
        <h1>アバウト</h1>









    </div>
    <!-- アバウトここまで -->
    <!-- one team -->
    <div class="concept">
        <h1>One team</h1>










    </div>
    <!-- one teamここまで -->
    <!-- 所有物件 -->
    <div class="realestate">
        <h1>所有物件</h1>









    </div>
    <!-- 所有物件ここまで -->
    <!-- ブログ -->
    <div class="blog">
        <h1>ブログ</h1>







        

    </div>
    <!-- ブログここまで -->
    <!-- フッター -->
    <div class="footer">
        <?php get_template_part('parts/footer'); ?>
    </div>
    <?php wp_footer(); ?>
    <!-- フッターここまで -->
    </div>
</body>
</html>