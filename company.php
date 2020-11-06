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
                    <div class="hrNav font-14"><a href="<?php echo home_url(); ?>">HOME</a>>>
                        <?php if(has_category()): ?>
                        <?php $postcat=get_the_category(); ?>
                        <?php echo get_category_parents($postcat[0],true); ?>
                        <?php endif; ?>
                        <a><?php the_title(); ?></a>
                    </div>
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
                        <td>2014年11月</td>
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
                        <td>神奈川県横浜市緑区長津田4-15-18</td>
                    </tr>
                </tbody>
            </table>
        </div>
         <!-- コンテンツここまで -->
         <div class="footer-margin"></div>

        </div>


<!-- フッター -->
<?php get_footer(); ?>