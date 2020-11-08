<?php
/*
Template Name: BLOG
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
                <?php single_term_title(); ?>に関して&nbsp; <img class='icon01' src='<?php echo get_template_directory_uri(); ?>/img/icon_01.jpg'>
           </div>
             
           <div class="content-box mt-40">
<!-- コンテンツレフト -->
             <div class="contentLeft">
                <a href="blog_detail.html">
                
                 <div class="mainCard">
                     <div class="mainCard-left">
                         <img class='mainImg' src="../img/property_01.jpg" alt="">
                     </div>
                     <div class="mainCard-right">
                         <div class="titleBox">
                             <div class="mainCard-title font-20">タイトル</div>
                             <div class="mainCard-tag-box">
                                 <div class="mainCard-tag font-16">不動産</div>
                                 <div class="mainCard-time font-14 mt-10">2020/10/30</div>
                             </div>
                         </div>
                         <div class="mainCard-text font-16 mt-30">
                            あああああああああああああああああああああああ
                            あああああああああああああああああああああああ
                            あああああああああああああああああああああああ
                            あああああああああああああああああああああああ
                            あああああああああああああああああああああああ
                            ああああああああああああああああ・・・・
                            
                         </div>
                     </div>

                 </div>
                </a>
<!-- ブログ -->
                <div class="blogs mt-10">
                <?php
                    global $post;
                    $args = array( 'posts_per_page' => 9 );
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ) {
                    setup_postdata($post);
                ?>
                    <div class="blogCard">
                        <div class="blogImg">
                            <?php the_post_thumbnail('index_thumbnail'); ?>
                        </div>
                        <div class="blogTitleBox">
                            <a href="<?php the_permalink(); ?>">
                            <div class="blogCard-title font-16 "><?php the_title(); ?></div>
                    </a>
                            <div class="blogCard-tag-box">
                                <div class="blogCard-tag font-12 "><?php the_tags('<ul><li class="mainCard-tag font-12">','</li><li class="mainCard-tag font-12">','</li></ul>'); ?></div>
                                <div class="blogCard-time font-10 mt-10"><?php the_time('Y.m.d') ?> </div>
                            </div>
                        </div>
                        <div class="blogCard-text font-12">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>

                    <?php
                        }
                        wp_reset_postdata();
                    ?>

                </div>
<!-- ブログここまで -->

<!-- ページナビ -->
               <div class="pageLink mt-30">
                   <ul class='pNavs'>
                       <li class='pNav'>1</li>
                       <li class='pNav'>2</li>
                       <li class='pNav'>3</li>
                       <li class='pNav'>4</li>
                       <li class='pNav'>5</li>
                   </ul>
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

         <!-- コンテンツここまで -->
         <!-- コンテンツここまで -->
         <div class="footer-margin"></div>

        </div>

        </div>
        </div>


<!-- フッター -->
<?php get_footer(); ?>