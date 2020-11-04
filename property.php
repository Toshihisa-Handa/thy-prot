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
           <div class="reHeader">
           <ul class='reNav'>
               <li class="reNavs">
                 <a href="#"><div class="font-28 c-white">HOME</div></a> 
               </li>
               <li class="reNavs">
                <a href="#"> <div class="font-28 c-white">COMPANY</div></a> 
               </li>
               <li class="reNavs">
                <a href="#"><div class="font-28 c-white">PROPERTY</div></a> 
               </li>
               <li class="reNavs">
                <a href="#"><div class="font-28 c-white">BLOG</div></a> 
               </li>
               <li class="reNavs">
                <a href="#"><div class="font-28 c-white">CONTACT</div></a> 
               </li>
           </ul>
           </div>
           </div>
       </div>
      <!-- レスポンシブヘッダーリンクここまで -->




        <!-- レスポンシブ時のヘッダーリンクここまで -->
        
        <div id='cwrapper' class="cwrapper">
         <div class="headerFix"></div>
            <!-- パンくず -->
            <div class="headerRoute">
                <div class="hrNav font-14">HOME>>PROPERTY</div>
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
                        <img class='property-img'  src="<?php echo get_template_directory_uri(); ?>/img/property_01.jpg" alt="">
                    </div>
                    <div class="imges">
                        <img class='property-small-img' src="<?php echo get_template_directory_uri(); ?>/img/property_02.jpg" alt="">
                        <img class='property-small-img' src="<?php echo get_template_directory_uri(); ?>/img/property_02.jpg" alt="">
                        <img class='property-small-img' src="<?php echo get_template_directory_uri(); ?>/img/property_02.jpg" alt="">
                    </div>
               </div>
                 <div class="contentRight">
                     <div class="contentTitle font-20">
                        八幡ハイム
                     </div>
                     <div class="contentText font-15 mt-30">
                        埼玉県草加市にある築40年の物件。<br>
                        日当たり良好で、スーパー徒歩3分の距離。<br>
                        また、全面室内リフォーム済み。<br>
                        アクセントクロスや白いフローリングを施し、清潔感があります。
                     </div>
                     <div class="contentText font-16 mt-40">
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
                        <img class='property-img'  src="<?php echo get_template_directory_uri(); ?>/img/property_05.jpg" alt="">
                    </div>
                    <div class="imges">
                        <img class='property-small-img' src="" alt="">
                        <img class='property-small-img' src="" alt="">
                        <img class='property-small-img' src="" alt="">
                    </div>
               </div>
                 <div class="contentRight">
                     <div class="contentTitle font-20">
                        グリーンヒルズ
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

        </div>


<!-- フッター -->
<?php get_footer(); ?>