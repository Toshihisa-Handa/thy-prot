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
             <?php get_template_part('tag', 'medium') ?>


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
        <?php get_template_part('related', 'card') ?>

        <!--関連記事ここまで-->

        </div>

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

