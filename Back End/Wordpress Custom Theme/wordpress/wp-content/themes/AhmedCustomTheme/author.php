<?php get_header() ?>
<div class="container author-page">

    <h1 class="profile-header text-center"><?php the_author_meta('nickname') ?> Page</h1>
    
    
    <div class="author-main-info">
        <div class="row">
            <div class="col-md-3">
                <?php
                    echo get_avatar(get_the_author_meta('ID'), 150, '', 'User Avatar', array(
                        'class' => 'img-responsive img-thumbnail center-block'
                    ));
                ?>
            </div>
            <div class="col-md-9">
                <div class="list-unstyled author-info">
                    <li>First Name: <?php the_author_meta('first_name');?> </li>
                    <li>Last Name: <?php the_author_meta('last_name');?> </li>
                    <li>Nickname: <?php the_author_meta('nickname');?> </li>
                    <hr>
                    <?php
                        if(get_the_author_meta('description')) {
                            echo '<p>';
                                the_author_meta('description');
                            echo '</p>';
                        } else {
                            echo 'There is no biography';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row author-stats">
        <div class="col-sm-3">
            <div class="stats">
                Posts
                <span><?php echo count_user_posts(get_the_author_meta('ID')) ?></span>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="stats">
            Comments
                <span>
                    <?php 
                        echo get_comments(array(
                            'user_id' => get_the_author_meta('ID'),
                            'count' => true
                        ));
                    ?>
                </span>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="stats">
            Total Posts
                <span>0</span>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="stats">
            Testing
                <span>0</span>
            </div>
        </div>
    </div>



    <?php
        echo '<h3 class="author-posts-title">';
            the_author_meta('nickname');
        echo ' Latest Posts </h3>';

        //instant an object to show the posts in author page
        $author_posts = new WP_Query(array(
            'author' => get_the_author_meta('ID'),
            'posts_per_page' => -1 //to show all the posts
        ));

        if($author_posts->have_posts()) {
            while($author_posts->have_posts()) {
                $author_posts->the_post();?>
                <div class="author-posts">
                    <div class="row">
                        <div class="col-sm-3">
                            <?php 
                                the_post_thumbnail('', ['class' => 'img-thumbnail img-responsive' , 'title' => 'Post Images']); 
                            ?>
                        </div>
                        <div class="col-sm-9">
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
                                <p class="post-content">
                                    <?php
                                        // the_content('Read More...'); 
                                        the_excerpt(); //we can customize this from functions.php
                                    ?>
                                </p>
                        </div> 
                        <div class="clearfix"></div>
                    </div>
                </div>
    <?php 
            }
        } 
        //to reset the loop query to prevent problems
        wp_reset_postdata();



        //Th show comments in author page
        echo '<h3 class="author-posts-title">';
            the_author_meta('nickname');
        echo ' Latest Comments </h3>';
        $comments = get_comments(array(
            'user_id' => get_the_author_meta('ID'),
            'status' => 'approve',
            'number' => 6,
            'post_status' => 'publish',
            'post_type' => 'post'
        ));
        if($comments) {
            foreach($comments as $comment){
                echo '<div class="latest-comments">';
                    echo '<a href="' . get_permalink($comment->comment_post_ID) . '">';
                        echo get_the_title($comment->comment_post_ID);
                    echo '</a> <br>';
                    echo '<span class="date"><i class="fa fa-calendar"></i>  Added on ' . mysql2date('l , F j, Y', $comment->comment_date) . '</span>';
                    echo '<span class="content">' . $comment->comment_content . '</span>';
                echo '</div>';
            }
        } else {
            echo 'This Ahuthor has no comments ';
        }
         
    ?>


</div>
<?php get_footer() ?>