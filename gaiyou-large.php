<a href="<?php the_permalink(); ?>">

    <div class="mainCard">
        <div class="mainCard-left">
        <?php the_post_thumbnail('index_thumbnail'); ?>
        </div>
        <div class="mainCard-right">
            <div class="titleBox">
                <div class="mainCard-title font-20"><?php the_title(); ?></div>
                <div class="mainCard-tag-box">
                    <div class="mainCard-tag font-16"><?php the_tags('<ul><li class="mainCard-tag font-12">','</li><li class="mainCard-tag font-12">','</li></ul>'); ?></div>
                    <div class="mainCard-time font-14 mt-10">><?php the_time('Y.m.d') ?></div>
                </div>
            </div>
            <div class="mainCard-text font-16 mt-30">
            <?php the_excerpt(); ?>
            </div>
        </div>

    </div>
</a>
