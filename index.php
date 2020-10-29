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
           <div class="about-left">
               <div class="aboutTitle font-ll">About Us&nbsp; &nbsp; <img style='width:40px;' src='<?php echo get_template_directory_uri(); ?>/img/hana2.jpg ?>'></div>
               <div class="aboutText font-m">私たちは、関東近郊に2物件を所有し、あらゆる層に低価格で<br>
                                               住まいを提供する事業を行っています。<br>
                                               私たちは、低価格であること、イコール、古く条件が悪いアパ<br>
                                               ートではなく、立地条件がよい物件を選別し、手を加えること<br>
                                               で安くてもよい住まいを提供できるよう事業をおこなっており<br>
                                               ます。私たちは、関東近郊に2物件を所有し、あらゆる層に低<br>
                                               価格で住まいを提供する事業を行っています。
               </div>
               <div class="more">more</div>
            </div>
            <div class="about-right">
              <div class="rightImg"></div>
           </div>
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