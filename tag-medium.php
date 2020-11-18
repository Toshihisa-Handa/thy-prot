

<div class="blogs mt-10">
                    <?php if(have_posts()):while(have_posts()):
                    the_post(); ?>
                    <div class="blogCard">
                        <div class="blogLeft">
                            <?php the_post_thumbnail('index_thumbnail'); ?>
                        </div>
                        <div class="blogRight">
                        <div class="blogTitleBox">
                            <a href="<?php the_permalink(); ?>">
                                <div class="blogCard-title font-16 "><?php the_title(); ?></div>
                            </a>
                            <div class="blogCardTagBox">
                                <div class="blogCard-tag font-12 "><?php the_tags('<ul><li class="mainCard-tag font-12">','</li><li class="mainCard-tag font-12">','</li></ul>'); ?></div>
                                <div class="blogCard-time "><?php the_time('Y.m.d') ?> </div>
                            </div>
                            </div>
                     
                        <div class="blogCard-text font-12">
                            <?php the_excerpt(); ?>
                        </div>
                        </div>
                    </div>

                    <?php endwhile; endif; ?>
</div>