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
        <div class="contents content-head about-area">
           <div class="about-left">
               <div class="aboutTitle font-32">About Us&nbsp; &nbsp; <img style='width:40px;' src='<?php echo get_template_directory_uri(); ?>/img/hana2.jpg ?>'></div>
               <div class="aboutText font-15">私たちは、関東近郊に2物件を所有し、あらゆる層に低価格で<br>
                                               住まいを提供する事業を行っています。<br>
                                               私たちは、低価格であること、イコール、古く条件が悪いアパ<br>
                                               ートではなく、立地条件がよい物件を選別し、手を加えること<br>
                                               で安くてもよい住まいを提供できるよう事業をおこなっており<br>
                                               ます。私たちは、関東近郊に2物件を所有し、あらゆる層に低<br>
                                               価格で住まいを提供する事業を行っています。
               </div>
               <!-- <div class="more">more</div> -->
            </div>
            <div class="about-right">
              <div class="rightImg-box">
                  <img class='rightImg' src="<?php echo get_template_directory_uri(); ?>/img/hana4.jpg?>" alt="">
              </div>
           </div>
        </div>

    </div>
    <!-- アバウトここまで -->
    <!-- one team -->
    <div class="concept">
        <div class="contents content-head concept-area">
        <div class="concept-left">
            <div class="leftImg-box">
            <img class='leftImg' src="<?php echo get_template_directory_uri(); ?>/img/hana1.jpg?>" alt="">
            </div>
        </div>
        <div class="concept-right">
            <div class="conceptTitle font-32">One Team&nbsp; &nbsp; <img style='width:40px;' src='<?php echo get_template_directory_uri(); ?>/img/hana2.jpg ?>'></div>
            <div class="conceptText font-16">私たちは、不動産や中小のリフォーム会社とタッグ<br>
                                     を組んで、お客様によりよい条件のアパートを提供<br>
                                     できるよう、密に連携をくんでとりくんでおります。
             </div>
        </div>



        </div>
    </div>
    <!-- one teamここまで -->
    <!-- 所有物件 -->
    <div class="property">
        <div class="contents-large">
          <div class="wrapper">
              <div class="propertyTitle-box">
                <div class="propertyTitle font-32">所有物件</div>
                <img style='width:40px;' src='<?php echo get_template_directory_uri(); ?>/img/hana2.jpg ?>'>
              </div>
            </div>
          <div class="propertyCard-box">
              <div class="cardLeft">
                  <div class="cardImg-box">
                    <img class='cardImg' src="<?php echo get_template_directory_uri(); ?>/img/hana1.jpg?>" alt="">
                  </div>
                  <div class="cardSentence">
                      <div class="cardTitle font-16">埼玉県草加市</div>
                      <div class="cardText font-15">最寄り駅より徒歩10分日当たり良好の物件、スーパー徒歩3分あ<br>
                                            り</div>
                  </div>
              </div>
              <div class="cardRight">
                  <div class="cardImg-box">
                    <img class='cardImg' src="<?php echo get_template_directory_uri(); ?>/img/hana1.jpg?>" alt="">
                  </div>
                  <div class="cardSentence">
                      <div class="cardTitle font-16">神奈川県川崎市</div>
                      <div class="cardText font-15">緑豊かな環境の中、地域では大規模開発が行われている地域で<br>
                                                   す。</div>
                  </div>
              </div>
          </div>
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