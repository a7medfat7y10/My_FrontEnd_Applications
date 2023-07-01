<?php get_header(); ?>


<div class="container home-page">
    <div class="row" style="margin-bottom: 70px">
        <div class="row text-center category-information">
            <div class="col-sm-4">
                <h1 class="category-title"><?php single_cat_title() ?></h1>
            </div>
            <div class="col-sm-4">
                <div class="category-description"><?php echo category_description(); ?></div>
            </div>
            <div class="col-sm-4">
                <div class="cat-stats">
                    <?php
                        $comments_count = 0;
                        $all_comments = get_comments(array(
                            'status' => 'approve'
                        ));
                        $cat = get_queried_object();
                        foreach($all_comments as $comment) {
                            $post_id = $comment->comment_post_ID;
                            if(! in_category($cat->slug , $post_id)) {
                                
                                continue;
                            }
                            $comments_count++;
                        }
                        $posts_count = $cat->count;
                    ?>
                    <span>Articles: <?php echo $posts_count ?> </span>
                    <span>Comments: <?php echo $comments_count ?> </span>
                </div>
            </div>
        </div>

        <div class="col-sm-8">
            <?php
            if(have_posts()) {
                while(have_posts()) {
                    the_post();?>
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
            <?php 
                }
            }
            //to reset the loop query to prevent problems
            wp_reset_postdata();?>
        </div>
        <div class="col-sm-4 sidebar">
            <?php
                // if(is_active_sidebar('main-sidebar')) {
                //     dynamic_sidebar('main-sidebar');
                // }
                get_sidebar();
            ?>
        </div>




            <?php
            echo '<div class="clearfix"></div>';




            //post pagination with numbers
            echo '<div class="text-center pagination-numbers">';
                echo numbering_pagination();
            echo '</div>';
        ?>
    </div>
</div>


<?php get_footer(); ?>