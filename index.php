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
    <!-- ヘッダールート -->
    <div class="headerRoute">
        
    </div>
    <!-- ヘッダールートここまで -->
    <!-- メイン -->
    <div class="main" style='background-image: url("<?php echo get_template_directory_uri(); ?>/img/hana3.jpg?>")'>

    </div>
    <!-- ヘッダールートここまで -->
    




    <!-- アバウト -->
    <div class="about">
        <div class="contents content-head">
        <h1>アバウト</h1>

        </div>









    </div>
    <!-- アバウトここまで -->
    <!-- one team -->
    <div class="concept">
        <div class="contents content-head">
        <h1>One team</h1>

        </div>










    </div>
    <!-- one teamここまで -->
    <!-- 所有物件 -->
    <div class="property">
        <div class="contents">
        <h1>所有物件</h1>

        </div>









    </div>
    <!-- 所有物件ここまで -->
    <!-- ブログ -->
    <div class="blog">
        <div class="contents">
        <h1>ブログ</h1>

        </div>









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