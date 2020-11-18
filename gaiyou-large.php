
    <div class="mainCard">
        <div class="mainCard-left">
        <?php if(has_post_thumbnail()): ?>
                                            <?php $postthumb=wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
                                        <img class='main-blogImg' src="<?php echo $postthumb[0]; ?>">
                                        <?php else: ?>
                                            <img class='main-blogImg' src="<?php echo get_template_directory_uri(); ?>/img/no_image.png">
                                        <?php endif; ?>
        </div>
        <div class="mainCard-right">
        <a class='mainlink' href="<?php the_permalink(); ?>">
            <div class="mainCard-title font-20"><?php the_title(); ?></div>
            <div class="mainCard-tag font-16"><?php the_tags('タグ：', '  ', '<br />' ); ?></div>
            <div class="mainCard-time"><?php the_time('Y.m.d') ?></div>
            <div class="mainCard-text font-16">
            <?php the_excerpt(); ?>
            </div>
            </a>
        </div>

    </div>
  


