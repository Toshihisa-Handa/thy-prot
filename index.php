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
            <!-- メイン -->
            <div class="main" style='background-image: url("<?php echo get_template_directory_uri(); ?>/img/main_pc.jpg?>")'>

            </div>
            <!-- ヘッダールートここまで -->
            


            <!-- アバウト -->
            <div class="about">
                <div class="contents-common content-head about-area">
                <div class="about-left">
                    <div class="aboutTitle font-32">About Us&nbsp; <img class='icon01' src='<?php echo get_template_directory_uri(); ?>/img/icon_01.jpg ?>'></div>
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
                        <img class='rightImg' src="<?php echo get_template_directory_uri(); ?>/img/top_02.jpg?>" alt="">
                    </div>
                </div>
                </div>

            </div>
            <!-- アバウトここまで -->
            <!-- one team -->
            <div class="concept">
                <div class="contents-common content-head concept-area">
                <div class="concept-left">
                    <div class="leftImg-box">
                    <img class='leftImg' src="<?php echo get_template_directory_uri(); ?>/img/top_03.jpg?>" alt="">
                    </div>
                </div>
                <div class="concept-right">
                    <div class="conceptTitle font-32">One Team&nbsp; <img class='icon01' src='<?php echo get_template_directory_uri(); ?>/img/icon_01.jpg ?>'></div>
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
                <div class="contents-property">
                <div class="wrapper">
                    <div class="propertyTitle-box">
                        <div class="propertyTitle font-32">所有物件</div>
                        <img class='icon01_under' src='<?php echo get_template_directory_uri(); ?>/img/icon_01.jpg?>'>
                    </div>
                    </div>
                <div class="propertyCard-box">
                    <div class="pCard">
                        <div class="cardImg-box">
                            <img class='cardImg' src="<?php echo get_template_directory_uri(); ?>/img/property_02.jpg?>" alt="">
                        </div>
                        <div class="cardSentence">
                            <div class="cardTitle font-16">埼玉県草加市</div>
                            <div class="cardText font-15">最寄り駅より徒歩10分日当たり良好の物件、スーパー徒歩3分あ<br>
                                                    り</div>
                        </div>
                    </div>
                    <div class="pCard">
                        <div class="cardImg-box">
                            <img class='cardImg' src="<?php echo get_template_directory_uri(); ?>/img/top_04.jpg?>" alt="">
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
                <div class="contents-blog">
                    <div class="blogTitle-box">
                    <img class='icon01_side' src='<?php echo get_template_directory_uri(); ?>/img/icon_02.jpg ?>'>
                    <div class="blogTitle font-32">人気記事</div>
                    </div>
                    <div class="blogCards">
                        <div class="blogCard-box">
                            <div class="bCard">
                                <div class="bCardImg-box">
                                <img class='bCardImg' src="<?php echo get_template_directory_uri(); ?>/img/property_03.jpg?>" alt="">
                                </div>
                                <div class="bCardSentence">
                                <div class="bcardTitles">
                                    <div class="bCardTitle font-16">タイトル</div>
                                    <div class="bCardTag-box">
                                    <div class="bCardTag font-14">不動産</div>
                                    <div class="bCardTime font-14">2020/10/20</div>
                                    </div>
                                </div>
                                
                                <div class="bCardText font-15">日差しの降り注ぐ西向き<br>
                                                                のきれいなぶっけんです<br>
                                                                日差しの降り注ぐ西向き<br>
                                                                のきれいなぶっけんです<br>
                                                                のきれいなぶっけんです<br>
                                                                のきれいなぶっけんです<br>
                                                                日差しの降り注ぐ西向き<br>
                                                                のきれいなぶっけんです<br>
                                                                のきれいなぶっけんです<br>
                                                                のきれいなぶっけんです<br>
                                                                日差しの降り注ぐ西向き<br>
                                                                のきれいなぶっけんです<br>
                                                                のきれいなぶっけんです<br>
                                                                </div>
                            </div>
                            </div>
                        </div>


                        <div class="blogCard-box">
                            <div class="bCard">
                                <div class="bCardImg-box">
                                <img class='bCardImg' src="<?php echo get_template_directory_uri(); ?>/img/property_03.jpg?>" alt="">
                                </div>
                                <div class="bCardSentence">
                                <div class="bcardTitles">
                                    <div class="bCardTitle font-16">タイトル</div>
                                    <div class="bCardTag-box">
                                    <div class="bCardTag font-14">不動産</div>
                                    <div class="bCardTime font-14">2020/10/20</div>
                                    </div>
                                </div>
                                
                                <div class="bCardText font-15">日差しの降り注ぐ西向き<br>
                                                                のきれいなぶっけんです<br>
                                                                日差しの降り注ぐ西向き<br>
                                                                のきれいなぶっけんです<br>
                                                                のきれいなぶっけんです<br>
                                                                のきれいなぶっけんです<br>
                                                                日差しの降り注ぐ西向き<br>
                                                                のきれいなぶっけんです<br>
                                                                のきれいなぶっけんです<br>
                                                                のきれいなぶっけんです<br>
                                                                日差しの降り注ぐ西向き<br>
                                                                のきれいなぶっけんです<br>
                                                                のきれいなぶっけんです<br>
                                                                </div>
                            </div>
                            </div>
                        </div>


                        <div class="blogCard-box">
                            <div class="bCard">
                                <div class="bCardImg-box">
                                <img class='bCardImg' src="<?php echo get_template_directory_uri(); ?>/img/property_03.jpg?>" alt="">
                                </div>
                                <div class="bCardSentence">
                                <div class="bcardTitles">
                                    <div class="bCardTitle font-16">タイトル</div>
                                    <div class="bCardTag-box">
                                    <div class="bCardTag font-14">不動産</div>
                                    <div class="bCardTime font-14">2020/10/20</div>
                                    </div>
                                </div>
                                
                                <div class="bCardText font-15">日差しの降り注ぐ西向き<br>
                                                                のきれいなぶっけんです<br>
                                                                日差しの降り注ぐ西向き<br>
                                                                のきれいなぶっけんです<br>
                                                                のきれいなぶっけんです<br>
                                                                のきれいなぶっけんです<br>
                                                                日差しの降り注ぐ西向き<br>
                                                                のきれいなぶっけんです<br>
                                                                のきれいなぶっけんです<br>
                                                                のきれいなぶっけんです<br>
                                                                日差しの降り注ぐ西向き<br>
                                                                のきれいなぶっけんです<br>
                                                                のきれいなぶっけんです<br>
                                                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ブログここまで -->
        </div>



        <!-- フッター -->
        <?php get_template_part('parts/footer'); ?>
        <?php wp_footer(); ?>
        <!-- フッターここまで -->
        </div>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>
</html>