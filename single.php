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
                <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope
                        itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="<?php echo home_url(); ?>">
                            <span itemprop="name">HOME</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
        
                    <li itemprop="itemListElement" itemscope
                        itemtype="https://schema.org/ListItem">
                        <a itemprop="item">
                            <span itemprop="name">BLOG</span>
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
             <div class="contentLeft">
                 
                 <?php if(have_posts()): while(have_posts()):
                 the_post(); ?>
                 
                 <div class="detailCard">
                     <div class="detailCard-top">
                     <?php the_post_thumbnail('index_thumbnail'); ?>
                     </div>
                     <div class="detailCard-bottom">
                         <div class="dtitleBox">
                             <div class="mainCard-title font-20"><?php the_title(); ?></div>
                             <div class="mainCard-tag-box">
                                 <div class="detailCard-tag font-16">不動産</div>
                                 <div class="mainCard-time font-14 mt-10">2020/10/30</div>
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
                   
                <!-- 関連カード -->
                <div class="relatedCard">
                    <img class='blogImg' src="../img/property_02.jpg" alt="">
                    <div class="blogTitleBox">
                        <div class="blogCard-title font-16 ">タイトル</div>
                        <div class="blogCard-tag-box">
                            <div class="blogCard-tag font-12 ">不動産</div>
                            <div class="blogCard-time font-10 mt-10">2020/09/30</div>
                        </div>
                    </div>
                    <div class="blogCard-text font-12">
                        あああああああああああああああ
                        あああああああああああああああ
                        ああああああああああああ・・・
                    </div>
                </div>

                <div class="relatedCard">
                    <img class='blogImg' src="../img/property_02.jpg" alt="">
                    <div class="blogTitleBox">
                        <div class="blogCard-title font-16 ">タイトル</div>
                        <div class="blogCard-tag-box">
                            <div class="blogCard-tag font-12 ">不動産</div>
                            <div class="blogCard-time font-10 mt-10">2020/09/30</div>
                        </div>
                    </div>
                    <div class="blogCard-text font-12">
                        あああああああああああああああ
                        あああああああああああああああ
                        ああああああああああああ・・・
                    </div>
                </div>

                <div class="relatedCard">
                    <img class='blogImg' src="../img/property_02.jpg" alt="">
                    <div class="blogTitleBox">
                        <div class="blogCard-title font-16 ">タイトル</div>
                        <div class="blogCard-tag-box">
                            <div class="blogCard-tag font-12 ">不動産</div>
                            <div class="blogCard-time font-10 mt-10">2020/09/30</div>
                        </div>
                    </div>
                    <div class="blogCard-text font-12">
                        あああああああああああああああ
                        あああああああああああああああ
                        ああああああああああああ・・・
                    </div>
                </div>
               <!-- 関連カードここまで -->
               </div>


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