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
                <div class="hrNav font-14">HOME>>BLOG</div>
            </div>
            <!-- パンくずここまで -->
        <!-- コンテンツここから -->
        <div class="contents-area">
             <div class="contents-title font-32 mt-40">
                BLOG&nbsp; <img class='icon01' src='<?php echo get_template_directory_uri(); ?>/img/icon_01.jpg'>
           </div>
             
           <div class="content-box mt-40">
<!-- コンテンツレフト -->
             <div class="contentLeft">
                 
                <h2><?php echo get_search_query(); ?>に一致した結果</h2>


             </div>
  <!-- コンテンツライト -->
        <div class="contentRight">
                <?php get_sidebar(); ?>
        </div>

        </div>
         <!-- コンテンツここまで -->
         <div class="footer-margin"></div>

        </div>


<!-- フッター -->
<?php get_footer(); ?>

<!-- // 人気記事用にカスタムフィールドにアクセス数を1ずつ加算する -->
<?php
    $count_key='postviews';
    $count=get_post_meta($post->ID,$count_key,true);
    $count++;
    update_post_meta($post->ID,$count_key,$count);
?>