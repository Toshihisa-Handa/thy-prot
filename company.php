<?php
/*
Template Name: Company
*/
?>
<?php get_header(); ?>

<!-- レスポンシブ時のヘッダーリンク -->
<!-- レスポンシブ時のヘッダーナビ -->

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
        COMPANY&nbsp; <img class='icon01' src='<?php echo get_template_directory_uri(); ?>/img/icon_01.jpg'>
    </div>
    <table class="company_tb">
        <tbody>
            <tr>
                <th>会社概要</th>
                <td>合同会社 THY</td>
            </tr>
            <tr>
                <th>設立</th>
                <td>2018年5月</td>
            </tr>
            <tr>
                <th>代表社員</th>
                <td>Baba Takeshi</td>
            </tr>
            <tr>
                <th>資本金</th>
                <td>500万円</td>
            </tr>
            <tr>
                <th>所在地</th>
                <td>神奈川県横浜市緑区長津田</td>
            </tr>
        </tbody>
    </table>
</div>
<!-- コンテンツここまで -->
<div class="footer-margin"></div>

<!-- フッター -->
<?php get_footer(); ?>