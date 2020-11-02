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

        <!-- レスポンシブ時のヘッダーリンク -->
        <?php get_template_part('parts/reHeader'); ?>
        <!-- レスポンシブ時のヘッダーリンクここまで -->
        
        <div id='cwrapper' class="cwrapper">
     
        </div>



        <!-- フッター -->
        <?php get_template_part('parts/footer'); ?>
        <?php wp_footer(); ?>
        <!-- フッターここまで -->
        </div>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>
</html>