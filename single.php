<?php get_header(); ?>

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

<!-- .headerFixでパン屑の位置を調整するためのマージンをとっている -->
<div class="headerFix"></div>



<!-- パンくず -->
<div class="headerRoute">
    <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope
            itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="<?php echo home_url(); ?>">
                <span itemprop="name">HOME</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>
            <?php if(has_category()): ?>
            <?php $postcat=get_the_category(); ?>
            <?php echo get_category_parents($postcat[0],true,'</li><li>'); ?>
            <?php endif; ?>
        <li itemprop="itemListElement" itemscope
            itemtype="https://schema.org/ListItem">
            <a itemprop="item">
                <span itemprop="name"><?php the_title(); ?></span>
            </a>
            <meta itemprop="position" content="2" />
        </li>
    </ol>
</div>
<!-- パンくずここまで -->


<!-- コンテンツここから -->
<div class="contents-area">
        <div class="contents-title font-32 mt-40">
        BLOG&nbsp; <img class='icon01' src='<?php echo get_template_directory_uri(); ?>/img/icon_01.jpg'>
    </div>
        
    <div class="content-box mt-40">
        <!-- コンテンツレフト -->
        <div class="bcontentLeft">
            
            <?php if(have_posts()): while(have_posts()):
            the_post(); ?>
            
            <div class="detailCard">
                <div class="detailCard-top">
                <?php if(has_post_thumbnail()): ?>
                    <?php $postthumb=wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
                <img class='mainImg' src="<?php echo $postthumb[0]; ?>">
                <?php else: ?>
                    <img class='mainImg' src="<?php echo get_template_directory_uri(); ?>/img/no_image.png">
                <?php endif; ?>
                </div>
                <div class="detailCard-bottom">
                    <div class="dtitleBox">
                        <div class="mainCard-title font-20"><?php the_title(); ?></div>
                        <div class="mainCard-tag-box">
                        <?php the_tags('<ul><li class="mainCard-tag font-12">','</li><li class="mainCard-tag font-12">','</li></ul>'); ?>
                            <div class="mainCard-time font-14 mt-10">更新日:<?php echo get_the_modified_date('Y/m/d'); ?></time></div>
                        </div>
                    </div>
                    <div class="detailCard-text font-16 mt-30">
                    <?php the_excerpt(); ?>
                    </div>

                    <div class="contact">
                    <div class="contact-area">
                        <div class="contact-box font-24">問い合わせフォーム</div>
                    </div>
                    </div>
                <div class="contact-margin"></div>
                </div>
            <?php endwhile; endif; ?>
            </div>


        <!-- 関連記事 -->
        <div class="commonTitleBox mt-30">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_02.jpg" alt="">
            <div class="commonTitle font-20">関連記事</div>
        </div>
        <div class="related">
            <?php if(has_category()){
                    $cats=get_the_category();
                    $catkwds=array();
                    foreach($cats as $cat){
                        $catkwds[]=$cat->term_id;
                    }
                }
            ?>
            <?php 
            $myposts=get_posts(array(
                'post_type'=>'post',
                'posts_per_page'=>'3',
                'post__not_in'=>array($post->ID),
                'category__in'=>$catkwds,
                'orderby'=>'rand'
            ));
            if($myposts): ?>
        <!-- 関連カード -->
        <?php foreach($myposts as $post):
                setup_postdata($post); ?>
            <div class="relatedCard">
                    <?php if(has_post_thumbnail()): ?>
                        <?php $postthumb=wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
                    <img class='blogImg' src="<?php echo $postthumb[0]; ?>">
                    <?php else: ?>
                        <img class='blogImg' src="<?php echo get_template_directory_uri(); ?>/img/no_image.png">
                    <?php endif; ?>
                <div class="blogTitleBox">
                    <a href="<?php the_permalink(); ?>">
                        <div class="blogCard-title font-16 "><?php the_title(); ?></div>
                    </a>
                        <!-- <div class="blogCard-tag-box"> -->
                            <!-- <div class="blogCard-tag font-12 "><?php the_tags('<ul><li class="mainCard-tag font-12">','</li><li class="mainCard-tag font-12">','</li></ul>'); ?></div> -->
                            <!-- <div class="blogCard-time font-10 mt-10">更新日:<?php echo get_the_modified_date('Y/m/d'); ?></time></div> -->
                        <!-- </div> -->
                </div>
                <div class="blogCard-text font-12">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- 関連カードここまで -->
        <?php wp_reset_postdata();
            endif; ?>
        </div>
        </div>
        <!--関連記事ここまで-->
        <!-- コンテンツライト -->
        <div class="bcontentRight">
                <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<!-- コンテンツここまで -->


</div>
<div class="footer-margin"></div>



<!-- フッター -->
<?php get_footer(); ?>

<!-- // 人気記事用にカスタムフィールドにアクセス数を1ずつ加算する -->
<?php
    $count_key='postviews';
    $count=get_post_meta($post->ID,$count_key,true);
    $count++;
    update_post_meta($post->ID,$count_key,$count);
?>