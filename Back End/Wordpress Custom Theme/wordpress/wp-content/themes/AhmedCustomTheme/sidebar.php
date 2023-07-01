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


<div class="sidebar-category">
    <div class="widget">
        <h3 class="widget-tit"><?php single_cat_title() ?> Statistics</h3>
        <div class="widget-cont">
            <ul>
                <li class="list-unstyled">
                    <span>Comments: </span> <?php echo $comments_count ?>
                    <span>Artisles: </span> <?php echo $posts_count ?>

                </li>
            </ul>
        </div>
    </div>
    <div class="widget">
        <h3 class="widget-tit">Latest 5 posts</h3>
        <div class="widget-cont">
            <ul class="list-unstyled">
                <?php
                $cat_id = get_queried_object()->id;
                $query = new WP_Query(array(
                    'posts_per_page' => 5,
                    'cat' => $cat_id
                ));
                if($query->have_posts()){
                    while($query->have_posts()) {
                        $query->the_post();
                        echo '<li>';
                            echo '<a target="_blank" href="'; the_permalink(); echo '">';
                                the_title();
                            echo '</a>';
                        echo '</li>';
                    }
                }
                ?>
                            
            </ul>
        </div>
    </div>
    <div class="widget">
        <h3 class="widget-tit">Most Comments Posts</h3>
        <div class="widget-cont">
            <ul class="list-unstyled">
                <?php
                $cat_id = get_queried_object()->id;
                $hotquery = new WP_Query(array(
                    'posts_per_page' => 1,
                    'orderby' => 'comment_count'
                ));
                if($hotquery->have_posts()){
                    while($hotquery->have_posts()) {
                        $hotquery->the_post();
                        echo '<li>';
                            echo '<a target="_blank" href="'; the_permalink(); echo '">';
                                the_title();
                            echo '</a>';
                            echo'<hr>';
                            echo'This Post Has:';
                            comments_popup_link('0 Comments', '1 Comment', '% Comments', 'comment-url', 'Comments Disabled');
                        echo '</li>';
                    }
                }
                ?>
                            
            </ul>
        </div>
    </div>
</div>