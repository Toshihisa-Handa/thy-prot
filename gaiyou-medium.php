 <div class="blogCard">
    <div class="blogImg">
        <?php the_post_thumbnail('index_thumbnail'); ?>
    </div>
    <div class="blogTitleBox">
        <a href="<?php the_permalink(); ?>">
            <div class="blogCard-title font-16 "><?php the_title(); ?></div>
        </a>
        <div class="blogCard-tag-box">
            <div class="blogCard-tag font-12 "><?php the_tags('<ul><li class="mainCard-tag font-12">','</li><li class="mainCard-tag font-12">','</li></ul>'); ?></div>
            <div class="blogCard-time font-10 mt-10"><?php the_time('Y.m.d') ?> </div>
        </div>
    </div>
    <div class="blogCard-text font-12">
        <?php the_excerpt(); ?>
    </div>
</div>