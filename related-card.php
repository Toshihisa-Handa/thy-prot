 <!-- 関連記事 -->
                         <div class="commonTitleBox">
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
                                <div class="related-blogLeft">
                                        <?php if(has_post_thumbnail()): ?>
                                            <?php $postthumb=wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
                                        <img class='related-blogImg' src="<?php echo $postthumb[0]; ?>">
                                        <?php else: ?>
                                            <img class='related-blogImg' src="<?php echo get_template_directory_uri(); ?>/img/no_image.png">
                                        <?php endif; ?>
                                </div>
                                <div class="related-blogRight">
                                    <div class="blogTitleBox">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="blogCard-title font-16 "><?php the_title(); ?></div>
                                        </a>
                                    </div>
                                    <div class="blogCard-text font-12">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    </div>

                                </div>
                            <?php endforeach; ?>
                        <!-- 関連カードここまで -->
                        <?php wp_reset_postdata();
                                endif; ?>
                        </div>

                    
                <!--関連記事ここまで-->