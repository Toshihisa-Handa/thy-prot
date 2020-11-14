 <div class="blogCard">
    <div class="blogImg">
    <?php if(has_post_thumbnail()): ?>
                                            <?php $postthumb=wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
                                        <img class='blogImg' src="<?php echo $postthumb[0]; ?>">
                                        <?php else: ?>
                                            <img class='blogImg' src="<?php echo get_template_directory_uri(); ?>/img/no_image.png">
                                        <?php endif; ?>
    </div>
    <div class="blogTitleBox">
        <a href="<?php the_permalink(); ?>">
            <div class="blogCard-title font-16 ">
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
    </div>
    <div class="blogTagBox">
            <div class="blogCard-tag font-12 "><?php the_tags('<ul><li class="font-12">','</li><li class="font-12">','</li></ul>'); ?></div>
            <div class="blogCard-time font-10"><?php the_time('Y.m.d') ?> </div>
    </div>
    <div class="blogCard-text font-12">
        <?php the_excerpt(); ?>
    </div>
</div>