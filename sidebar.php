
<!-- おすすめ記事 -->
<div class="commonTitleBox mt-30">
    <img src="<?php echo get_template_directory_uri(); ?>/img/icon_02.jpg" alt="">
    <div class="commonTitle font-20">おすすめ記事</div>
    </div>
    <div class="sideCard-box ">

        <!--カスタムメニュー読み込み-->
        <?php
        $location_name = 'pickupnav'; 
        $locations = get_nav_menu_locations();
        $myposts = wp_get_nav_menu_items( $locations[ $location_name ] ); 
        if( $myposts ): ?>
        <!--カスタムメニューend-->
        <!--１記事づつ読み込み-->
        <?php foreach($myposts as $post):
        if( $post->object == 'post' ):
        $post = get_post( $post->object_id );
        setup_postdata($post); ?>
        <!--１記事づつ読み込みend-->     
        <!-- おすすめカード -->
        <div class="sideCard">
        <div class="recommendCard-left">
            <?php if(has_post_thumbnail()): ?>
                <?php $postthumb=wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
            <img class='recommendImg' src="<?php echo $postthumb[0]; ?>">
            <?php else: ?>
                <img class='recommendImg' src="<?php echo get_template_directory_uri(); ?>/img/no_image.png">
            <?php endif; ?>
        </div>
            <div class="recommendCard-right">
                    <div class="recommendCard-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                <div class="recommendCard-text">
                    <?php the_excerpt(); ?>
                
                </div>
            </div>

        </div>

        <!-- おすすめカードここまで -->
   
    <!--１記事づつ読み込み-->
    <?php endif;
    endforeach; ?>
    <!--１記事づつ読み込みend-->  
    <!--カスタムメニュー読み込み-->
    <?php wp_reset_postdata(); 
    endif; ?>
            <!--カスタムメニューend-->
            </div>
<!-- おすすめ記事ここまで -->

<!--検索-->
    <?php dynamic_sidebar('submenu') ?>
<!--検索end-->


<!-- 人気記事 -->
<div class="commonTitleBox mt-30">
    <img src="<?php echo get_template_directory_uri(); ?>/img/icon_02.jpg" alt="">
    <div class="commonTitle font-20">人気記事</div>
 </div>
<div class="sideCard-box2">
    <!-- おすすめカード -->
    <?php
    $myposts=get_posts(array(
        'post_type'=>'post',
        'posts_per_page'=>'3',
        'meta_key'=>'postviews',
        'orderby'=>'meta_value_num',
    ));
    if($myposts): ?>
    <?php foreach($myposts as $post):
    setup_postdata($post); ?>
    <div class="sideCard2">
        <div class="recommendCard-left">
            <?php if(has_post_thumbnail()): ?>
                <?php $postthumb=wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
            <img class='recommendImg' src="<?php echo $postthumb[0]; ?>">
            <?php else: ?>
                <img class='recommendImg' src="<?php echo get_template_directory_uri(); ?>/img/no_image.png">
            <?php endif; ?>
        </div>
        <div class="recommendCard-right">
                <div class="recommendCard-title font-16"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
            <div class="recommendCard-text">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata();
    endif; ?>

   <!-- おすすめカードここまで -->
