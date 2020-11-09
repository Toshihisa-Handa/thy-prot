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
                BLOG&nbsp; <img class='icon01' src='<?php echo get_template_directory_uri(); ?>/img/icon_01.jpg'>
           </div>
             
           <div class="content-box mt-40">
<!-- コンテンツレフト -->
             <div class="contentLeft">
      <?php
                    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                    $news_args = array(
                    'post_status' => 'publish',
                    'posts_per_page' => 9,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'paged' => $paged
                    );
                    $information= get_posts($news_args);
                    if( $information):
                    ?>
                    <?php
                    foreach( $information as $post ):
                    setup_postdata( $post ); $loopcount++;
                    ?>
	<?php if ($loopcount <= 1): ?>
		<!-- 最初の１件目の内容　-->
		<div class="post">
        <?php get_template_part('gaiyou', 'large') ?>

		</div>
	<?php else: ?>
		<!-- ２件目以降の内容　-->
        <?php get_template_part('gaiyou', 'medium') ?>
	<?php endif; ?>

<?php
                    endforeach;
                    wp_reset_postdata();
                    ?>
                    <?php else: ?>
                    <p>表示できる情報はありません。</p>
                    <?php endif; ?>


             

        <!-- ページナビ -->
                    <!-- <div class="pageLink mt-30">
                        <ul class='pNavs'>
                            <li class='pNav'>1</li>
                            <li class='pNav'>2</li>
                            <li class='pNav'>3</li>
                            <li class='pNav'>4</li>
                            <li class='pNav'>5</li>
                        </ul>
                    </div> -->
                    <div class="pageLink mt-30">
                    <div class="pagination">
            <?php
                $paged = (int) get_query_var('paged');
                $args = array(
                    'paged' => $paged,           //ページネーション用
                    'post_type' => 'post',       //投稿タイプ（記事ループと条件にする）
                    'posts_per_page' => 9,      //表示投稿数（記事ループと条件にする）
                    'orderby' => 'post_date',    //表示順条件（記事ループと条件にする）
                    'order' => 'DESC',           //降順（記事ループと条件にする）
                    'post_status' => 'publish'   //公開済みのみ表示（記事ループと条件にする）
                );
                $the_query = new WP_Query($args);
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                        get_template_part( 'content', get_post_format() );
                    endwhile;
                else:
                    get_template_part( 'content', 'none' );
                endif;
                if ($the_query->max_num_pages > 0) {
                    echo paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => 'page/%#%/',
                        'current' => max(1, $paged),
                        'total' => $the_query->max_num_pages,
                        'prev_text' => '<<', //次への表示指定
                        'next_text' => '>>'//前への表示指定
                    ));
                }
                wp_reset_postdata();
                ?>
                    </div>
                    </div>

        <!-- 関連記事 -->
        <div class="commonTitleBox mt-30">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_02.jpg" alt="">
                        <div class="commonTitle font-20">関連記事</div>
                    </div>
                    <div class="related">
                            <?php if(has_category()){
                                    $cats=get_the_category();
                                    $catkwds=array();
                                    foreach($cats as $cat){
                                        $catkwds[]=$cat->term_id;
                                    }
                                }
                            ?>
                            <?php 
                            $myposts=get_posts(array(
                                'post_type'=>'post',
                                'posts_per_page'=>'3',
                                'post__not_in'=>array($post->ID),
                                'category__in'=>$catkwds,
                                'orderby'=>'rand'
                            ));
                            if($myposts): ?>
                        <!-- 関連カード -->
                        <?php foreach($myposts as $post):
                                setup_postdata($post); ?>
                            <div class="relatedCard">
                                    <?php if(has_post_thumbnail()): ?>
                                        <?php $postthumb=wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
                                    <img class='blogImg' src="<?php echo $postthumb[0]; ?>">
                                    <?php else: ?>
                                        <img class='blogImg' src="<?php echo get_template_directory_uri(); ?>/img/no_image.png">
                                    <?php endif; ?>
                                <div class="blogTitleBox">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="blogCard-title font-16 "><?php the_title(); ?></div>
                                    </a>
                                        <div class="blogCard-tag-box">
                                            <div class="blogCard-tag font-12 "><?php the_tags('<ul><li class="mainCard-tag font-12">','</li><li class="mainCard-tag font-12">','</li></ul>'); ?></div>
                                            <div class="blogCard-time font-10 mt-10">更新日:<?php echo get_the_modified_date('Y/m/d'); ?></time></div>
                                        </div>
                                </div>
                                <div class="blogCard-text font-12">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <!-- 関連カードここまで -->
                    <?php wp_reset_postdata();
                            endif; ?>
                    </div>
             </div>
<!--関連記事ここまで-->
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