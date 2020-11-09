<?php
/*
Template Name: contact
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
            <div class="contact_form">
                <iframe class='contact-area' src="https://docs.google.com/forms/d/e/1FAIpQLSd2Ou6Ykp2Ch32FR0z_UAuNKumdibpZM9HM-bsuVdhifR42Xw/viewform?embedded=true"   frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
            </div>
        </div>
         <!-- コンテンツここまで -->
         <div class="footer-margin"></div>

        </div>


<!-- フッター -->
<?php get_footer(); ?>