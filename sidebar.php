
<!-- おすすめ記事 -->
<div class="commonTitleBox mt-30">
    <img src="<?php echo get_template_directory_uri(); ?>/img/icon_02.jpg" alt="">
    <div class="commonTitle font-20">おすすめ記事</div>
    </div>
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
    <div class="mt-30">
        <!-- おすすめカード -->
        <div class="sideCard">
            <div class="mainCard-left">
                <img class='mainImg' src="<?php the_post_thumbnail(); ?>" alt=""> 
            </div>
            <div class="mainCard-right">
                <div class="titleBox">
                    <div class="mainCard-title font-16"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    <div class="mainCard-tag-box">
                        <?php the_tags('<ul><li class="mainCard-tag font-12">','</li><li class="mainCard-tag font-12">','</li></ul>'); ?>
                        <time datetime="<?php echo get_the_modified_date('Y-m-d'); ?>" class="mainCard-time font-10 mt-10">
                    更新日:<?php echo get_the_modified_date('Y/m/d'); ?></time>
                    </div>
                </div>
                <div class="mainCard-text font-12 mt-30">
                    <?php the_excerpt(); ?>
                
                </div>
            </div>

        </div>

        <!-- おすすめカードここまで -->
    </div>
    <!--１記事づつ読み込み-->
    <?php endif;
    endforeach; ?>
    <!--１記事づつ読み込みend-->  
    <!--カスタムメニュー読み込み-->
    <?php wp_reset_postdata(); 
    endif; ?>
            <!--カスタムメニューend-->
<!-- おすすめ記事ここまで -->

<!--検索-->
    <?php dynamic_sidebar('submenu') ?>
<!--検索end-->


<!-- 人気記事 -->
<div class="commonTitleBox mt-30">
    <img src="<?php echo get_template_directory_uri(); ?>/img/icon_02.jpg" alt="">
    <div class="commonTitle font-20">人気記事</div>
 </div>
<div class="mt-30">
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
    <div class="sideCard">
        <div class="mainCard-left">
             <img class='mainImg' src="<?php the_post_thumbnail(); ?>" alt=""> 
        </div>
        <div class="mainCard-right">
            <div class="titleBox">
                <div class="mainCard-title font-16"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                <div class="mainCard-tag-box">
                    <?php the_tags('<ul><li class="mainCard-tag font-12">','</li><li class="mainCard-tag font-12">','</li></ul>'); ?>
                    <time datetime="<?php echo get_the_modified_date('Y-m-d'); ?>" class="mainCard-time font-10 mt-10">
                    更新日:<?php echo get_the_modified_date('Y/m/d'); ?></time>
                </div>
            </div>
            <div class="mainCard-text font-12 mt-30">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata();
    endif; ?>

   <!-- おすすめカードここまで -->
