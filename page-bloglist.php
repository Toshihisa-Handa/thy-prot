<?php
/*
Template Name: BLOG
*/
?>
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
            <div class="balloon1">
              <p>各記事のタイトル / タグをクリックすると詳細に飛びます</p>
           </div>
        </div>
        <div class="content-box">

        
            <!-- コンテンツレフト -->
            <?php get_template_part('contents', 'left') ?>
            <!-- コンテンツレフトここまで -->


            <!-- コンテンツライト -->
            <div class="bcontentRight">
                <?php get_sidebar(); ?>
            </div>
            <!-- コンテンツライトここまで -->


        </div>
    </div>
    <!-- コンテンツここまで -->

    <div class="footer-margin"></div>
</div>


<!-- フッター -->
<?php get_footer(); ?>