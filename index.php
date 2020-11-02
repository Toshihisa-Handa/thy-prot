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
    <div class="headerRoute"></div>
    <!-- ヘッダールートここまで -->




    <!-- 所有物件 -->
    <div class="property_main">
        
        <h1>所有物件<img src="<?php echo get_template_directory_uri(); ?>/img/icon_01.jpg"></h1>
        <div class="property_box">
            <!-- 八幡ハイム -->
                <div class="property_sub">
                    <div class="property_sub_photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/property_01.jpg" alt="八幡ハイム">
                    </div>
                    <div class="property_sub_text">
                        <h2>八幡ハイム</h2>
                        <div class="pro_comment">
                            埼玉県草加市にある築40年の物件。<br>
                            日当たり良好で、スーパー徒歩3分の距離。<br>
                            また、全面室内リフォーム済み。<br>
                            アクセントクロスや白いフローリングを施し、清潔感があります。
                        </div>
                        <ul class="pro_overview">
                            <li>交通：東武伊勢崎線 新田駅より徒歩10分</li>
                            <li>築年数：40年</li>
                            <li>階数：3階建て</li>
                            <li>総戸数：6世帯（2DK）＋事務所</li>
                        </ul>
                        <ul class="pro_facility">
                            <li>バス</li>
                            <li>トイレ別</li>
                            <li>ペット可</li>
                            <li>エアコン</li>
                            <li>追い炊き</li>
                            <li>フローリング</li>
                        </ul>
                    </div>
                </div>
                <!-- グリーンヒルズ -->
                <div class="property_sub">
                    <div class="property_sub_photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/property_05.jpg" alt="グリーンヒルズ">
                    </div>
                    <div class="property_sub_text">
                        <h2>グリーンヒルズ</h2>
                        <div class="pro_comment">
                        神奈川県川崎市向ヶ丘遊園にある築32年の物件。<br>
                        周辺には生田緑地もあり自然豊かな環境で2023年には、<br>
                        隣接地域において小田急電鉄による大規模開発が進行中で、<br>
                        ショッピングモールや観光施設が開業予定。<br>
                        ただいま全面リフォーム中
                        </div>
                        <ul class="pro_overview">
                            <li>交通：小田急電鉄向ヶ丘遊園地よりバス10分</li>
                            <li>築年数：32年</li>
                            <li>階数：2階建て</li>
                            <li>総戸数：4世帯（2DK+1DK）</li>
                        </ul>
                        <ul class="pro_facility">
                            <li>バス</li>
                            <li>トイレ別</li>
                            <li>ペット可</li>
                            <li>エアコン</li>
                            <li>追い炊き</li>
                            <li>フローリング</li>
                        </ul>
                    </div>
                </div>

        </div>

    </div>

    
    <!-- 所有物件　ここまで -->

    
    <!-- フッター -->
    <div class="footer">
        <?php get_template_part('parts/footer'); ?>
    </div>
    <?php wp_footer(); ?>
    <!-- フッターここまで -->
    </div>
</body>
</html>