<?php get_header(); ?>
<!-- ヘッダールート -->
<div class="headerRoute"></div>   
<!-- ヘッダールートここまで -->

<!-- レスポンシブヘッダーリンク -->
<div id='reHeader-wrapper' class="reHeader-wrapper hidden">
<div class="reHeader-innerwrapper">
    <?php wp_nav_menu(array(
    'theme_location'=>'sitenav',
    'container'=>'div',
    'container_class'=>'reHeader',
    'container_id'=>'hidemenu'
    )); ?>
</div>
</div>
<!-- レスポンシブヘッダーリンクここまで -->

<!-- クリックイベントで消す部分を囲うラッパーdivの閉じタグはfooter.phpにあり -->
<div id='cwrapper' class="cwrapper">
      
<!-- メイン -->
        <div class="main">
            <picture>
                <source class='mainImg' media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top_01.jpg?>">
                <img class='mainImg' src="<?php echo get_template_directory_uri(); ?>/img/top_01_sp.jpg?>">
            </picture>
          <!-- <img class='mainImg' src="<?php echo get_template_directory_uri(); ?>/img/top_01.jpg?>" alt=""> -->
        </div>

<!-- アバウト -->
<div class="about">
    <div class="contents-common content-head concept-area_about">
    <div class="concept-left">
        <div class="leftImg-box">
        <img class='leftImg' src="<?php echo get_template_directory_uri(); ?>/img/top_02.jpg" alt="">
        </div>
    </div>
    <div class="concept-right">
        <div class="conceptTitle font-28">About Us&nbsp; <img class='icon01' src='<?php echo get_template_directory_uri(); ?>/img/icon_01.jpg ?>/img/icon_01.jpg'></div>
        <div class="conceptText font-15">私たちは、関東近郊に2物件を所有し、あらゆる層に低価格で住まいを提供する事業を行っています。<br>
            私たちは、低価格であること、イコール、古く条件が悪いアパートではなく、立地条件がよい物件を選別し、手を加えることで安くてもよい住まいを提供できるよう事業をおこなっております。<br>
            私たちは、関東近郊に2物件を所有し、あらゆる層に低価格で住まいを提供する事業を行っています。
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
        <img class='leftImg' src="<?php echo get_template_directory_uri(); ?>/img/top_03.jpg" alt="">
        </div>
    </div>
    <div class="concept-right">
        <div class="conceptTitle font-32">One Team&nbsp; <img class='icon01' src='<?php echo get_template_directory_uri(); ?>/img/icon_01.jpg'></div>
        <div class="conceptText font-15">
            私たちは、不動産や中小のリフォーム会社とタッグを組んで、お客様によりよい条件のアパートを提供できるよう、密に連携をくんでとりくんでおります。
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
            <div class="propertyTitle font-28">所有物件</div>
            <img style='width:40px;' src='<?php echo get_template_directory_uri(); ?>/img/icon_01.jpg?>'>
            </div>
        </div>
        <div class="propertyCard-box">
            <div class="pCard">
                <div class="cardImg-box">
                <img class='cardImg' src="<?php echo get_template_directory_uri(); ?>/img/top_05.png?>" alt="">
                </div>
                <div class="cardSentence">
                    <div class="cardTitle font-16">埼玉県草加市</div>
                    <div class="cardText font-15">最寄り駅より徒歩10分日当たり良好の物件、スーパー徒歩3分あり</div>
                </div>
            </div>
            <div class="pCard">
                <div class="cardImg-box">
                <img class='cardImg' src="<?php echo get_template_directory_uri(); ?>/img/top_04.jpg?>" alt="">
                </div>
                <div class="cardSentence">
                    <div class="cardTitle font-16">神奈川県川崎市</div>
                    <div class="cardText font-15">緑豊かな環境の中、地域では大規模開発が行われている地域です。</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 所有物件ここまで -->

<!-- ブログ -->
<!-- <div class="blog">
    <div class="contents-blog">
        <div class="blogTitle-box">
            <img class='icon01_side' src='<?php echo get_template_directory_uri(); ?>/img/icon_02.jpg '>
            <div class="blogTitle font-28">新着記事</div>
        </div>
        <?php 
        $myposts=get_posts(array(
            'post_type'=>'post',
            // 'posts_per_page'=>'3',
        ));
        if($myposts): ?>
        <div class="blogCards">
            <?php foreach($myposts as $post):
            setup_postdata($post); ?>
                <div class="blogCard-box">
                    <div class="bCard">
                        <div class="bCardImg-box">
                            <?php if(has_post_thumbnail()): ?>
                                <?php $postthumb=wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
                            <img class='bCardImg' src="<?php echo $postthumb[0]; ?>">
                            <?php else: ?>
                                <img class='bCardImg' src="<?php echo get_template_directory_uri(); ?>/img/no_image.png">
                            <?php endif; ?>
                        </div>
                        <div class="bCardSentence">
                            <div class="bcardTitles">
                                <div class="bCardTitle font-16"><?php the_title(); ?></div>
                                <div class="bCardTag-box">
                                <div class="bCardTag font-14"><?php the_tags('<ul><li class="mainCard-tag font-12">','</li><li class="mainCard-tag font-12">','</li></ul>'); ?></div>
                                <div class="bCardTime font-14">更新日:<?php echo get_the_modified_date('Y/m/d'); ?></time></div>
                                </div>
                            </div>
                            
                            <div class="bCardText font-15">
                            <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        <?php wp_reset_postdata();
        endif; ?>
    </div>
</div> -->
<!-- ブログここまで -->



<!-- グライドJSやってみる -->
<div class="blog">
<div class="contents-blog">
        <div class="glide">
         <div class="glide__track" data-glide-el="track">
        <!-- <div class="blogCards"> -->
        <?php 
        $myposts=get_posts(array(
            'post_type'=>'post',
            // 'posts_per_page'=>'3',
        ));
        if($myposts): ?>
                <ul class="blogCard-box glide__slides">
                    <?php foreach($myposts as $post): setup_postdata($post); ?>
                    <li class="bCard glide__slide">
                        <div class="bCardImg-box">
                            <?php if(has_post_thumbnail()): ?>
                                <?php $postthumb=wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
                            <img class='bCardImg' src="<?php echo $postthumb[0]; ?>">
                            <?php else: ?>
                                <img class='bCardImg' src="<?php echo get_template_directory_uri(); ?>/img/no_image.png">
                            <?php endif; ?>
                        </div>
                        <div class="bCardSentence">
                            <div class="bcardTitles">
                            
                                <div class="bCardTitle font-16">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a></div>
                                <div class="bCardTag-box">
                                <div class="bCardTag font-14"><?php the_tags('<ul><li class="mainCard-tag font-12">','</li><li class="mainCard-tag font-12">','</li></ul>'); ?></div>
                                <div class="bCardTime font-14">更新日:<?php echo get_the_modified_date('Y/m/d'); ?></time></div>
                                </div>
                            </div>
                            
                            <div class="bCardText font-15">
                            <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php wp_reset_postdata(); endif; ?>
            </div>
            </div>
            </div>
            </div>






<!-- フッター -->
<?php get_footer(); ?>
