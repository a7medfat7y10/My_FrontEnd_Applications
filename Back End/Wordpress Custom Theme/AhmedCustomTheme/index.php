<?php get_header(); ?>


<div class="container home-page">
    <div class="row" style="margin-bottom: 70px">
        <div class="col-sm-8">
        <?php
            if(have_posts()) {
                while(have_posts()) {
                    the_post();?>
                    <!-- <div class="col-sm-offset-3 col-sm-6"> -->
                        <div class="main-post">
                            <h3 class="post-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <span class="post-author "><i class="fa fa-user"></i> 
                                <?php the_author_posts_link() ?>    
                            </span>
                            <span class="post-date "><i class="fa fa-calendar"></i>
                                 <?php the_time('F j, Y'); ?> 
                            </span>
                            <span class="post-comments "><i class="fa fa-comments-o"></i> 
                                <?php comments_popup_link('0 Comments', '1 Comment', '% Comments', 'comment-url', 'Comments Disabled'); ?>
                            </span>
                            <?php the_post_thumbnail('', ['class' => 'img-thumbnail img-responsive' , 'title' => 'Post Images']); ?>
                            <p class="post-content">
                                <?php
                                    // the_content('Read More...'); 
                                    the_excerpt(); //we can customize this from functions.php
                                ?>
                            </p>
                            <hr>
                            <p class="post-categories">
                                <i class="fa fa-tags"></i> <?php the_category(','); ?> 
                            </p>
                            <p class="post-tags">
                                <?php 
                                    if(has_tag()) {
                                        the_tags();
                                    } else {
                                        echo 'Tags: No tags ';
                                    }
                                ?>
                            </p>
                        </div>
                    <!-- </div>  -->
        <?php 
                }
            }
            //to reset the loop query to prevent problems
            wp_reset_postdata(); ?>
        </div>
        <div class="col-sm-4 sidebar">
            <?php
                if(is_active_sidebar('main-sidebar')) {
                    dynamic_sidebar('main-sidebar');
                }
            ?>
        </div>



            <?php
            echo '<div class="clearfix"></div>';


            // Post Pagination without numbers
            /* 
            echo '<div class="post-pagination">';
                if(get_previous_posts_link()) {
                    previous_posts_link('<i class="fa fa-chevron-left fa-lg" aria-hidden="true"></i> Prev');
                } else {
                    echo '<span class="previous-span">Prev</span>';
                }
        
                if(get_next_posts_link()) {
                    next_posts_link('Next <i class="fa fa-chevron-right fa-lg" aria-hidden="true"></i>');
                } else {
                    echo '<span class="next-span">Next</span>';
                }
            echo '</div>';
            */


            //post pagination with numbers
            echo '<div class="text-center pagination-numbers">';
                echo numbering_pagination();
            echo '</div>';
        ?>
    </div>
</div>


<?php get_footer(); ?>