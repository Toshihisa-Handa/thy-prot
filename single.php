<?php get_header(); ?>

<!-- レスポンシブヘッダーリンク -->
<div id='reHeader-wrapper' class="reHeader-wrapper hidden">
    <div class="reHeader-innerwrapper">
        <?php wp_nav_menu(array(
            'theme_location' => 'sitenav',
            'container' => 'div',
            'container_class' => 'reHeader',
            'container_id' => 'hidemenu'
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
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="<?php echo home_url(); ?>">
                    <span itemprop="name">HOME</span>
                </a>
                <meta itemprop="position" content="1" />
            </li>
            <?php if (has_category()) : ?>
                <?php $postcat = get_the_category(); ?>
                <?php echo get_category_parents($postcat[0], true, '</li><li>'); ?>
            <?php endif; ?>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
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
                <?php if (have_posts()) : while (have_posts()) :
                        the_post(); ?>

                        <div class="singleCard">
                            <div class="singleCard-left">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php $postthumb = wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
                                    <img class='single-blogImg' src="<?php echo $postthumb[0]; ?>">
                                <?php else : ?>
                                    <img class='single-blogImg' src="<?php echo get_template_directory_uri(); ?>/img/no_image.png">
                                <?php endif; ?>
                            </div>
                            <div class="singleCard-right">
                                <div class="singleCard-title font-20"><?php the_title(); ?></div>
                                <div class="singleCard-tag font-16"><?php the_tags('タグ：', '  ', '<br />'); ?></div>
                                <div class="singleCard-time ">更新日:<?php echo get_the_modified_date('Y/m/d'); ?></div>
                                <div class="singleCard-text font-16 "><?php the_content(); ?></div>

                                <div class="single-contact">
                                    <div class="single-contact-area">
                                        <div class="contact-box font-24">
                                            <div class="contact_form">
                                                <iframe class='contact-area' src="https://docs.google.com/forms/d/e/1FAIpQLSeTb-mAmkYaqeujCd3cavWLnjIbUyx8V2TCiMYlnfVh9AXH7Q/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-contact-margin"></div>
                            </div>
                    <?php endwhile;
                endif; ?>
                        </div>


                        <!-- 関連記事 -->
                        <?php get_template_part('related', 'card') ?>
                        <!--関連記事ここまで-->
            </div>
            <!-- コンテンツレフトここまで -->


            <!-- コンテンツライト -->
            <div class="bcontentRight">
                <?php get_sidebar(); ?>
            </div>
            <!-- コンテンツライトここまで -->


        </div>
    </div>
    <!-- コンテンツここまで -->


</div>
<div class="footer-margin"></div>



<!-- フッター -->
<?php get_footer(); ?>

<!-- // 人気記事用にカスタムフィールドにアクセス数を1ずつ加算する -->
<?php
$count_key = 'postviews';
$count = get_post_meta($post->ID, $count_key, true);
$count++;
update_post_meta($post->ID, $count_key, $count);
?>