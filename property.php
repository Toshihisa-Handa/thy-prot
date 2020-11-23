<?php
/*
Template Name: syoyuu
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
    PROPERTY&nbsp; <img class='icon01' src='<?php echo get_template_directory_uri(); ?>/img/icon_01.jpg'>
</div>
<div class="content-common mt-40">
    <div class="contentLeft">
        <div class="img-one">
            <?php echo do_shortcode('[smartslider3 slider="4"]'); ?>
        </div>
    </div>
        <div class="contentRight">
            <div class="contentTitle font-20">
            埼玉県草加市物件
            </div>
            <div class="contentText font-15 mt-30">
            埼玉県草加市にある築40年の物件。<br>
            日当たり良好で、スーパー徒歩3分の距離。<br>
            また、全面室内リフォーム済み。<br>
            アクセントクロスや白いフローリングを施し、清潔感があります。
            </div>
            <div class="contentText font-15 mt-40">
            交通：東武伊勢崎線 新田駅より徒歩10分<br>
            築年数：40年<br>
            階数：3階建て<br>
            総戸数：6世帯（2DK）＋事務所
            </div>
            <ul class="contentTags mt-40">
                <li class='font-16 contentTag'>バス・トイレ別</li>
                <li class='font-16 contentTag'>ペット可</li>
                <li class='font-16 contentTag'>エアコン</li>
                <li class='font-16 contentTag'>追い焚き</li>
                <li class='font-16 contentTag'>フローリング</li>
        </ul>
        </div>
</div>


<div class="content-common content-two">
    <div class="contentLeft">
        <div class="img-one">
        <?php echo do_shortcode('[smartslider3 slider="7"]');?>
            <!-- ローカル環境上：'[smartslider3 slider="5"]' -->
        </div>
    </div>
        <div class="contentRight">
            <div class="contentTitle font-20">
            神奈川県川崎市物件
            </div>
            <div class="contentText font-15 mt-30">
            神奈川県川崎市向ヶ丘遊園にある築32年の物件。<br>
            周辺には生田緑地もあり自然豊かな環境で2023年には、<br>
            隣接地域において小田急電鉄による大規模開発が進行中で、<br>
            ショッピングモールや観光施設が開業予定。<br>
            ただいま全面リフォーム中
            </div>
            <div class="contentText font-16 mt-40">
            交通：小田急電鉄向ヶ丘遊園地よりバス10分<br>
            築年数：32年<br>
            階数：2階建て<br>
            総戸数：4世帯（2DK+1DK）
            </div>
            <ul class="contentTags mt-40">
                <li class='font-16 contentTag'>バス・トイレ別</li>
                <li class='font-16 contentTag'>ペット可</li>
                <li class='font-16 contentTag'>エアコン</li>
                <li class='font-16 contentTag'>追い焚き</li>
                <li class='font-16 contentTag'>フローリング</li>
        </ul>
        </div>
</div>
</div>
<!-- コンテンツここまで -->

<div class="footer-margin"></div>


<!-- フッター -->
<?php get_footer(); ?>