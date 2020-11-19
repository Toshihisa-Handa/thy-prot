

<div class="tags mt-10">
<?php
        $paged = get_query_var('paged')? get_query_var('paged') : 1;
        $information= new WP_Query( array(
                    'post_type' => 'post',
                    'paged' => $paged,
                    'post_status' => 'publish',
                    'posts_per_page' => 7,
                ));
   
                    if(have_posts()):while(have_posts()):
                    the_post(); ?>
                    <div class="tagCard">
                        <div class="tagLeft">
                               <?php if(has_post_thumbnail()): ?>
                                            <?php $postthumb=wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
                                        <img class='tagImg' src="<?php echo $postthumb[0]; ?>">
                                        <?php else: ?>
                                            <img class='tagImg' src="<?php echo get_template_directory_uri(); ?>/img/no_image.png">
                                        <?php endif; ?>
                        </div>
                        <div class="tagRight">
                        <div class="tagTitleBox">
                            <a href="<?php the_permalink(); ?>">
                                <div class="tagCard-title">
                                <?php
                                if(mb_strlen($post->post_title, 'UTF-8')>15){
                                    $title= mb_substr($post->post_title, 0, 15, 'UTF-8');
                                    echo $title.'……';
                                }else{
                                    echo $post->post_title;
                                }
                                ?>
                            </div>
                            </a>
                                <div class="tagCard-tag font-16 "><?php the_tags('', '  ', '<br />' ); ?></div>
                                <div class="tagCard-time "><?php the_time('Y.m.d') ?> </div>
                            </div>
                     
                        <div class="tagCard-text font-16">
                            <?php the_excerpt(); ?>
                        </div>
                        </div>
                    </div>

                    <?php endwhile; endif; ?>

</div>

     

