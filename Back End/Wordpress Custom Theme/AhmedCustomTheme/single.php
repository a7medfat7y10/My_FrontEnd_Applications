<?php get_header(); ?>


<div class="container single-page">
    <div class="row" style="margin-bottom: 70px">
        <?php
            if(have_posts()) {
                while(have_posts()) {
                    the_post();?>
                        <div class="main-post single-post">
                            <?php edit_post_link('Edit <i class="fa fa-pencil"></i>') ?>
                            <h3 class="post-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <span class="post-date "><i class="fa fa-calendar"></i>
                                 <?php the_time('F j, Y'); ?> 
                            </span>
                            <span class="post-comments "><i class="fa fa-comments-o"></i> 
                                <?php comments_popup_link('0 Comments', '1 Comment', '% Comments', 'comment-url', 'Comments Disabled'); ?>
                            </span>
                            <?php the_post_thumbnail('', ['class' => 'img-thumbnail img-responsive' , 'title' => 'Post Images']); ?>
                            <p class="post-content">
                                <?php
                                    the_content(); 
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

            
            echo '<div class="clearfix"></div>';
            




        //random posts in the same category with the single posts
        echo'<div class="random-container">';
            echo '<h3 class="text-center random-title">Random Articles</h3>';
            $random_posts = new WP_Query(array(
                'posts_per_page' => 5,
                'orderby' => 'rand', 
                'category__in' => wp_get_post_categories(get_queried_object_id()), //category id
                'post__not_in' => array(get_queried_object_id()) //post id
            ));
            if($random_posts->have_posts()) {
                while($random_posts->have_posts()) {
                    $random_posts->the_post();?>
                    <div class="author-posts">
                        <h3 class="post-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <hr>
                    </div>
                <?php 
                }
            } 
            //to reset the loop query to prevent problems
            wp_reset_postdata();
        echo '</div>';







            //the author info
            echo '<div class="row author-info-container">';
                echo '<div class="col-sm-2">';
                    echo get_avatar(get_the_author_meta('ID'), 96, '', 'User Avatar', array(
                        'class' => 'img-responsive img-thumbnail center-block'
                    ));
                echo '</div>';
                echo '<div class="col-sm-10 author-info">';
                    echo '<h4>';
                        the_author_meta('first_name'); echo ' ';
                        the_author_meta('last_name'); echo ' ';
                        echo"(";the_author_meta('nickname'); echo")";
                    echo '</h4>';
                    if(get_the_author_meta('description')) {
                        echo '<p>';
                            the_author_meta('description');
                        echo '</p>';
                    } else {
                        echo 'There is no biography';
                    }
                echo '</div>';
                echo '<div class="col-sm-12 text-center author-stats">';
                    echo '<span>User posts: ' . count_user_posts(get_the_author_meta('ID')) . '</span>'; 
                    echo '<span>User Profile Link :';  the_author_posts_link() . '</span>'; 
                echo '</div>';
            echo '</div>';


            






            //pagination
            echo '<div class="post-pagination">';
                if(get_previous_post_link()) {
                    previous_post_link('%link', '<i class="fa fa-chevron-left fa-lg" aria-hidden="true"></i>  Previous Article: %title');
                } else {
                    echo '<span class="previous-span">Previous Article: None</span>';
                }
        
                if(get_next_post_link()) {
                    next_post_link('%link', 'Next Article: %title <i class="fa fa-chevron-right fa-lg" aria-hidden="true"></i>');
                } else {
                    echo '<span class="next-span">Next Article: None</span>';
                }
            echo '</div>';
            
            
            
            
            
            echo '<hr class="comment-separator" style="border-color: #ccb8b8;margin-top: 88px;">';





            //comments
            comments_template();
        ?>
    </div>
</div>


<?php get_footer(); ?>